<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\Http\ApiClient;

final class DnsRecordsService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Save resource records.
     */
    public function saveRecords(\CommunitySDKs\Spaceship\DTO\Request\SaverecordsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\SaverecordsResponse
    {
        $response = $this->apiClient->request(
            'PUT',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\SaverecordsException(
                'API request failed for saveRecords',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\SaverecordsResponse::fromPsrResponse($response);
    }

    /**
     * Delete resource records.
     */
    public function deleteRecords(\CommunitySDKs\Spaceship\DTO\Request\DeleterecordsRequest $request): \CommunitySDKs\Spaceship\DTO\Response\DeleterecordsResponse
    {
        $response = $this->apiClient->request(
            'DELETE',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\DeleterecordsException(
                'API request failed for deleteRecords',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\DeleterecordsResponse::fromPsrResponse($response);
    }

    /**
     * Get domain resource records list.
     */
    public function getResourceRecordsList(\CommunitySDKs\Spaceship\DTO\Request\GetresourcerecordslistRequest $request): \CommunitySDKs\Spaceship\DTO\Response\GetresourcerecordslistResponse
    {
        $response = $this->apiClient->request(
            'GET',
            $request->resolvePath(),
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Operation\GetresourcerecordslistException(
                'API request failed for getResourceRecordsList',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }
        return \CommunitySDKs\Spaceship\DTO\Response\GetresourcerecordslistResponse::fromPsrResponse($response);
    }

}
