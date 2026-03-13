<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\Http\ApiClient;

final class ContactsService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Save contact details.
     */
    public function saveDetails(\CommunitySDKs\Spaceship\DTO\Request\SavedetailsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\SavedetailsResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\SavedetailsException(
                'API request failed for saveDetails',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\SavedetailsResponse::fromPsrResponse($response);
    }

    /**
     * Read contact details.
     */
    public function readDetails(\CommunitySDKs\Spaceship\DTO\Request\ReaddetailsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\ReaddetailsResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\ReaddetailsException(
                'API request failed for readDetails',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\ReaddetailsResponse::fromPsrResponse($response);
    }

}
