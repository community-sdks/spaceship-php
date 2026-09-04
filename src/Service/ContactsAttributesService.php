<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

final class ContactsAttributesService
{
    public function __construct(private readonly \CommunitySDKs\Spaceship\Http\ApiClient $apiClient) {}

    /** Save contact attributes */
    public function saveContactAttributes(\CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\SaveContactAttributesRequest $request): \CommunitySDKs\Spaceship\DTO\ContactsAttributes\Response\SaveContactAttributesResponse
    {
        $response = $this->apiClient->request('PUT', '/v1/contacts/attributes', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\ContactsAttributes\SaveContactAttributesException("API request failed for saveContactAttributes", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\ContactsAttributes\Response\SaveContactAttributesResponse::fromPsrResponse($response);
    }

    /** Read attribute details */
    public function readAttributeDetails(\CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\ReadAttributeDetailsRequest $request): \CommunitySDKs\Spaceship\DTO\ContactsAttributes\Response\ReadAttributeDetailsResponse
    {
        $response = $this->apiClient->request('GET', '/v1/contacts/attributes/' . rawurlencode($request->contact) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\ContactsAttributes\ReadAttributeDetailsException("API request failed for readAttributeDetails", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\ContactsAttributes\Response\ReadAttributeDetailsResponse::fromPsrResponse($response);
    }
}
