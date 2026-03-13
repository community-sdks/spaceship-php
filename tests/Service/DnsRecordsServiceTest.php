<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Tests\Service;

use CommunitySDKs\Spaceship\Config\SpaceshipConfig;
use CommunitySDKs\Spaceship\Http\ApiClient;
use CommunitySDKs\Spaceship\Service\DNSRecordsService;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class DnsRecordsServiceTest extends TestCase
{
    public function testSaverecords(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(204, ['Content-Type' => 'application/json'], "")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DNSRecordsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\SaveRecordsRequest::sample();
        $response = $service->saveRecords($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testDeleterecords(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(204, ['Content-Type' => 'application/json'], "")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DNSRecordsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\DeleteRecordsRequest::sample();
        $response = $service->deleteRecords($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('DELETE', $history[0]['request']->getMethod());
    }

    public function testGetresourcerecordslist(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"ok\":true}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DNSRecordsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\GetResourceRecordsListRequest::sample();
        $response = $service->getResourceRecordsList($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

}
