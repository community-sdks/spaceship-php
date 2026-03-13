<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\Http\ApiClient;

final class DNSRecordsService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Save resource records.
     */
    public function saveRecords(\CommunitySDKs\Spaceship\DTO\Request\SaveRecordsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\SaveRecordsResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\SaveRecordsException(
                'API request failed for saveRecords',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\SaveRecordsResponse::fromPsrResponse($response);
    }

    /**
     * Delete resource records.
     */
    public function deleteRecords(\CommunitySDKs\Spaceship\DTO\Request\DeleteRecordsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DeleteRecordsResponse
    {
        $response = $this->apiClient->request(
            'DELETE',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DeleteRecordsException(
                'API request failed for deleteRecords',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DeleteRecordsResponse::fromPsrResponse($response);
    }

    /**
     * Get domain resource records list.
     */
    public function getResourceRecordsList(\CommunitySDKs\Spaceship\DTO\Request\GetResourceRecordsListRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetResourceRecordsListResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetResourceRecordsListException(
                'API request failed for getResourceRecordsList',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetResourceRecordsListResponse::fromPsrResponse($response);
    }

}
