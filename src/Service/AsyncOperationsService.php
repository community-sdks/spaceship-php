<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\DTO\AsyncOperations\Request\GetAsyncOperationDetailsRequest;
use CommunitySDKs\Spaceship\DTO\AsyncOperations\Response\GetAsyncOperationDetailsResponse;
use CommunitySDKs\Spaceship\Exception\AsyncOperations\GetAsyncOperationDetailsException;
use CommunitySDKs\Spaceship\Http\ApiClient;

final class AsyncOperationsService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Obtain async operation details.
     */
    public function getAsyncOperationDetails(GetAsyncOperationDetailsRequest $request): GetAsyncOperationDetailsResponse
    {
        $path = '/v1/async-operations/' . $request->operationId;

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new GetAsyncOperationDetailsException(
                'API request failed for getAsyncOperationDetails',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }

        return GetAsyncOperationDetailsResponse::fromPsrResponse($response);
    }
}
