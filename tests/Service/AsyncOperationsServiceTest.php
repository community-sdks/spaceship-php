<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Tests\Service;

use CommunitySDKs\Spaceship\Config\SpaceshipConfig;
use CommunitySDKs\Spaceship\Http\ApiClient;
use CommunitySDKs\Spaceship\Service\AsyncOperationsService;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class AsyncOperationsServiceTest extends TestCase
{
    public function testGetasyncoperationdetails(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new AsyncOperationsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\GetasyncoperationdetailsRequest::sample();
        $response = $service->getAsyncOperationDetails($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

}
