<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Tests\Service;

use CommunitySDKs\Spaceship\Config\SpaceshipConfig;
use CommunitySDKs\Spaceship\Http\ApiClient;
use CommunitySDKs\Spaceship\Service\SellerHubService;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class SellerhubServiceTest extends TestCase
{
    public function testCreatecheckoutlink(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new SellerHubService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\CreateCheckoutLinkRequest::sample();
        $response = $service->createCheckoutLink($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testGetsellerhubdomainlist(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"ok\":true}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new SellerHubService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\GetSellerHubDomainListRequest::sample();
        $response = $service->getSellerHubDomainList($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testCreatesellerhubdomain(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(201, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new SellerHubService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\CreateSellerHubDomainRequest::sample();
        $response = $service->createSellerHubDomain($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testGetsellerhubdomain(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new SellerHubService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\GetSellerHubDomainRequest::sample();
        $response = $service->getSellerHubDomain($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testUpdatesellerhubdomain(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new SellerHubService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\UpdateSellerHubDomainRequest::sample();
        $response = $service->updateSellerHubDomain($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PATCH', $history[0]['request']->getMethod());
    }

    public function testDeletesellerhubdomain(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(204, ['Content-Type' => 'application/json'], "")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new SellerHubService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\DeleteSellerHubDomainRequest::sample();
        $response = $service->deleteSellerHubDomain($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('DELETE', $history[0]['request']->getMethod());
    }

    public function testGetverificationrecords(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new SellerHubService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\GetVerificationRecordsRequest::sample();
        $response = $service->getVerificationRecords($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

}
