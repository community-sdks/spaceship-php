<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\Http\ApiClient;

final class AsyncOperationsService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Obtain async operation details.
     */
    public function getAsyncOperationDetails(\CommunitySDKs\Spaceship\DTO\Request\GetAsyncOperationDetailsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetAsyncOperationDetailsResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetAsyncOperationDetailsException(
                'API request failed for getAsyncOperationDetails',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetAsyncOperationDetailsResponse::fromPsrResponse($response);
    }

}
