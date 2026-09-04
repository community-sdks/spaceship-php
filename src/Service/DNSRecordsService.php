<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

final class DNSRecordsService
{
    public function __construct(private readonly \CommunitySDKs\Spaceship\Http\ApiClient $apiClient) {}

    /** Save resource records */
    public function saveRecords(\CommunitySDKs\Spaceship\DTO\DNSRecords\Request\SaveRecordsRequest $request): \CommunitySDKs\Spaceship\DTO\DNSRecords\Response\SaveRecordsResponse
    {
        $response = $this->apiClient->request('PUT', '/v1/dns/records/' . rawurlencode($request->domain) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\DNSRecords\SaveRecordsException("API request failed for saveRecords", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\DNSRecords\Response\SaveRecordsResponse::fromPsrResponse($response);
    }

    /** Delete resource records */
    public function deleteRecords(\CommunitySDKs\Spaceship\DTO\DNSRecords\Request\DeleteRecordsRequest $request): \CommunitySDKs\Spaceship\DTO\DNSRecords\Response\DeleteRecordsResponse
    {
        $response = $this->apiClient->request('DELETE', '/v1/dns/records/' . rawurlencode($request->domain) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\DNSRecords\DeleteRecordsException("API request failed for deleteRecords", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\DNSRecords\Response\DeleteRecordsResponse::fromPsrResponse($response);
    }

    /** Get domain resource records list */
    public function getResourceRecordsList(\CommunitySDKs\Spaceship\DTO\DNSRecords\Request\GetResourceRecordsListRequest $request): \CommunitySDKs\Spaceship\DTO\DNSRecords\Response\GetResourceRecordsListResponse
    {
        $response = $this->apiClient->request('GET', '/v1/dns/records/' . rawurlencode($request->domain) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\DNSRecords\GetResourceRecordsListException("API request failed for getResourceRecordsList", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\DNSRecords\Response\GetResourceRecordsListResponse::fromPsrResponse($response);
    }
}
