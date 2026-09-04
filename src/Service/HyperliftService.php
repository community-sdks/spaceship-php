<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Service;

final class HyperliftService
{
    public function __construct(private readonly \CommunitySDKs\Spaceship\Http\ApiClient $apiClient) {}

    /** Get Hyperlift application list */
    public function getHyperliftApplicationList(\CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationListRequest $request): \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationListResponse
    {
        $response = $this->apiClient->request('GET', '/v1/hyperlift/applications', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Hyperlift\GetHyperliftApplicationListException("API request failed for getHyperliftApplicationList", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationListResponse::fromPsrResponse($response);
    }

    /** Get a Hyperlift application */
    public function getHyperliftApplication(\CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationRequest $request): \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationResponse
    {
        $response = $this->apiClient->request('GET', '/v1/hyperlift/applications/' . rawurlencode($request->id) . '', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Hyperlift\GetHyperliftApplicationException("API request failed for getHyperliftApplication", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationResponse::fromPsrResponse($response);
    }

    /** Build a Hyperlift application */
    public function buildHyperliftApplication(\CommunitySDKs\Spaceship\DTO\Hyperlift\Request\BuildHyperliftApplicationRequest $request): \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\BuildHyperliftApplicationResponse
    {
        $response = $this->apiClient->request('POST', '/v1/hyperlift/applications/' . rawurlencode($request->id) . '/build', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Hyperlift\BuildHyperliftApplicationException("API request failed for buildHyperliftApplication", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\BuildHyperliftApplicationResponse::fromPsrResponse($response);
    }

    /** Get Hyperlift application build logs */
    public function getHyperliftApplicationBuildLogs(\CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationBuildLogsRequest $request): \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationBuildLogsResponse
    {
        $response = $this->apiClient->request('GET', '/v1/hyperlift/applications/' . rawurlencode($request->id) . '/build-logs', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Hyperlift\GetHyperliftApplicationBuildLogsException("API request failed for getHyperliftApplicationBuildLogs", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationBuildLogsResponse::fromPsrResponse($response);
    }

    /** Get Hyperlift application environment variables */
    public function getHyperliftApplicationEnvironment(\CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationEnvironmentRequest $request): \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationEnvironmentResponse
    {
        $response = $this->apiClient->request('GET', '/v1/hyperlift/applications/' . rawurlencode($request->id) . '/environment', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Hyperlift\GetHyperliftApplicationEnvironmentException("API request failed for getHyperliftApplicationEnvironment", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationEnvironmentResponse::fromPsrResponse($response);
    }

    /** Update Hyperlift application environment variables */
    public function updateHyperliftApplicationEnvironment(\CommunitySDKs\Spaceship\DTO\Hyperlift\Request\UpdateHyperliftApplicationEnvironmentRequest $request): \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\UpdateHyperliftApplicationEnvironmentResponse
    {
        $response = $this->apiClient->request('PUT', '/v1/hyperlift/applications/' . rawurlencode($request->id) . '/environment', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Hyperlift\UpdateHyperliftApplicationEnvironmentException("API request failed for updateHyperliftApplicationEnvironment", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\UpdateHyperliftApplicationEnvironmentResponse::fromPsrResponse($response);
    }

    /** Get Hyperlift application logs */
    public function getHyperliftApplicationLogs(\CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationLogsRequest $request): \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationLogsResponse
    {
        $response = $this->apiClient->request('GET', '/v1/hyperlift/applications/' . rawurlencode($request->id) . '/logs', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Hyperlift\GetHyperliftApplicationLogsException("API request failed for getHyperliftApplicationLogs", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationLogsResponse::fromPsrResponse($response);
    }

    /** Get Hyperlift application metrics */
    public function getHyperliftApplicationMetrics(\CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationMetricsRequest $request): \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationMetricsResponse
    {
        $response = $this->apiClient->request('GET', '/v1/hyperlift/applications/' . rawurlencode($request->id) . '/metrics', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Hyperlift\GetHyperliftApplicationMetricsException("API request failed for getHyperliftApplicationMetrics", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationMetricsResponse::fromPsrResponse($response);
    }

    /** Restart a Hyperlift application */
    public function restartHyperliftApplication(\CommunitySDKs\Spaceship\DTO\Hyperlift\Request\RestartHyperliftApplicationRequest $request): \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\RestartHyperliftApplicationResponse
    {
        $response = $this->apiClient->request('POST', '/v1/hyperlift/applications/' . rawurlencode($request->id) . '/restart', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Hyperlift\RestartHyperliftApplicationException("API request failed for restartHyperliftApplication", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\RestartHyperliftApplicationResponse::fromPsrResponse($response);
    }

    /** Scale a Hyperlift application */
    public function scaleHyperliftApplication(\CommunitySDKs\Spaceship\DTO\Hyperlift\Request\ScaleHyperliftApplicationRequest $request): \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\ScaleHyperliftApplicationResponse
    {
        $response = $this->apiClient->request('PUT', '/v1/hyperlift/applications/' . rawurlencode($request->id) . '/scale', $request->toQueryParams(), $request->toHeaders(), $request->toBody());
        if ($response->getStatusCode() >= 400) {
            throw new \CommunitySDKs\Spaceship\Exception\Hyperlift\ScaleHyperliftApplicationException("API request failed for scaleHyperliftApplication", $response->getStatusCode(), $response->getHeaders(), (string) $response->getBody());
        }
        return \CommunitySDKs\Spaceship\DTO\Hyperlift\Response\ScaleHyperliftApplicationResponse::fromPsrResponse($response);
    }
}
