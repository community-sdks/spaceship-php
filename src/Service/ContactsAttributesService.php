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
    public function saveContactAttributes(\CommunitySDKs\Spaceship\DTO\Request\SavecontactattributesRequest $request): \CommunitySDKs\Spaceship\DTO\Response\SavecontactattributesResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\SavecontactattributesException(
                'API request failed for saveContactAttributes',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\SavecontactattributesResponse::fromPsrResponse($response);
    }

    /**
     * Read attribute details.
     */
    public function readAttributeDetails(\CommunitySDKs\Spaceship\DTO\Request\ReadattributedetailsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\ReadattributedetailsResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\ReadattributedetailsException(
                'API request failed for readAttributeDetails',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\ReadattributedetailsResponse::fromPsrResponse($response);
    }

}
