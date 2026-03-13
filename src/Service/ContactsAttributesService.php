<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\Http\ApiClient;

final class ContactsAttributesService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Save contact attributes.
     */
    public function saveContactAttributes(\CommunitySDKs\Spaceship\DTO\Request\SaveContactAttributesRequest $request): \CommunitySDKs\Spaceship\DTO\Response\SaveContactAttributesResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\SaveContactAttributesException(
                'API request failed for saveContactAttributes',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\SaveContactAttributesResponse::fromPsrResponse($response);
    }

    /**
     * Read attribute details.
     */
    public function readAttributeDetails(\CommunitySDKs\Spaceship\DTO\Request\ReadAttributeDetailsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\ReadAttributeDetailsResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\ReadAttributeDetailsException(
                'API request failed for readAttributeDetails',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\ReadAttributeDetailsResponse::fromPsrResponse($response);
    }

}
