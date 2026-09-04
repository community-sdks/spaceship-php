<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

final class ContactsService
{
    public function __construct(private readonly \CommunitySDKs\Spaceship\Http\ApiClient $apiClient) {}

    /** Save contact details */
    public function saveDetails(\CommunitySDKs\Spaceship\DTO\Contacts\Request\SaveDetailsRequest $request): \CommunitySDKs\Spaceship\DTO\Contacts\Response\SaveDetailsResponse
    {
        $response = $this->apiClient->request('PUT', '/v1/contacts', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Contacts\SaveDetailsException("API request failed for saveDetails", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Contacts\Response\SaveDetailsResponse::fromPsrResponse($response);
    }

    /** Read contact details */
    public function readDetails(\CommunitySDKs\Spaceship\DTO\Contacts\Request\ReadDetailsRequest $request): \CommunitySDKs\Spaceship\DTO\Contacts\Response\ReadDetailsResponse
    {
        $response = $this->apiClient->request('GET', '/v1/contacts/' . rawurlencode($request->contact) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Contacts\ReadDetailsException("API request failed for readDetails", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Contacts\Response\ReadDetailsResponse::fromPsrResponse($response);
    }
}
