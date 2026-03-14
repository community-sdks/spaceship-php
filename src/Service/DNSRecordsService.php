<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

use CommunitySDKs\Spaceship\DTO\DNSRecords\Request\DeleteRecordsRequest;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Request\GetResourceRecordsListRequest;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Request\SaveRecordsRequest;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Response\DeleteRecordsResponse;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Response\GetResourceRecordsListResponse;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Response\SaveRecordsResponse;
use CommunitySDKs\Spaceship\Exception\DNSRecords\DeleteRecordsException;
use CommunitySDKs\Spaceship\Exception\DNSRecords\GetResourceRecordsListException;
use CommunitySDKs\Spaceship\Exception\DNSRecords\SaveRecordsException;
use CommunitySDKs\Spaceship\Http\ApiClient;

final class DNSRecordsService
{
    public function __construct(private readonly ApiClient $apiClient)
    {
    }

    /**
     * Save resource records.
     */
    public function saveRecords(SaveRecordsRequest $request): SaveRecordsResponse
    {
        $path = '/v1/dns/records/' . $request->domain;

        $response = $this->apiClient->request(
            'PUT',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new SaveRecordsException(
                'API request failed for saveRecords',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }

        return SaveRecordsResponse::fromPsrResponse($response);
    }

    /**
     * Delete resource records.
     */
    public function deleteRecords(DeleteRecordsRequest $request): DeleteRecordsResponse
    {
        $path = '/v1/dns/records/' . $request->domain;

        $response = $this->apiClient->request(
            'DELETE',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new DeleteRecordsException(
                'API request failed for deleteRecords',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }

        return DeleteRecordsResponse::fromPsrResponse($response);
    }

    /**
     * Get domain resource records list.
     */
    public function getResourceRecordsList(GetResourceRecordsListRequest $request): GetResourceRecordsListResponse
    {
        $path = '/v1/dns/records/' . $request->domain;

        $response = $this->apiClient->request(
            'GET',
            $path,
            $request->toQueryParams(),
            $request->toHeaders(),
            $request->toBody(),
        );
        if ($response->getStatusCode() >= 400) {
            throw new GetResourceRecordsListException(
                'API request failed for getResourceRecordsList',
                $response->getStatusCode(),
                $response->getHeaders(),
                (string) $response->getBody(),
            );
        }

        return GetResourceRecordsListResponse::fromPsrResponse($response);
    }
}
