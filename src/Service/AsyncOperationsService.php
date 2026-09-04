<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

final class AsyncOperationsService
{
    public function __construct(private readonly \CommunitySDKs\Spaceship\Http\ApiClient $apiClient) {}

    /** Obtain async operation details */
    public function getAsyncOperationDetails(\CommunitySDKs\Spaceship\DTO\AsyncOperations\Request\GetAsyncOperationDetailsRequest $request): \CommunitySDKs\Spaceship\DTO\AsyncOperations\Response\GetAsyncOperationDetailsResponse
    {
        $response = $this->apiClient->request('GET', '/v1/async-operations/' . rawurlencode($request->operationId) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\AsyncOperations\GetAsyncOperationDetailsException("API request failed for getAsyncOperationDetails", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\AsyncOperations\Response\GetAsyncOperationDetailsResponse::fromPsrResponse($response);
    }
}
