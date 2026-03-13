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
    public function saveDetails(\CommunitySDKs\Spaceship\DTO\Request\SaveDetailsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\SaveDetailsResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\SaveDetailsException(
                'API request failed for saveDetails',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\SaveDetailsResponse::fromPsrResponse($response);
    }

    /**
     * Read contact details.
     */
    public function readDetails(\CommunitySDKs\Spaceship\DTO\Request\ReadDetailsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\ReadDetailsResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\ReadDetailsException(
                'API request failed for readDetails',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\ReadDetailsResponse::fromPsrResponse($response);
    }

}
