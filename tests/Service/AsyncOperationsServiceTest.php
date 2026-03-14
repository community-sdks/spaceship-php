<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Tests\Service;

use CommunitySDKs\Spaceship\Config\Config;
use CommunitySDKs\Spaceship\DTO\AsyncOperations\Request\GetAsyncOperationDetailsRequest;
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
        $service = $this->createService([
            $this->jsonResponse(200, [
                'status' => 'success',
                'type' => 'domainCreate',
                'details' => [],
                'createdAt' => '2026-03-14T00:00:00Z',
                'modifiedAt' => '2026-03-14T01:00:00Z',
            ]),
        ], $history);
        $request = new GetAsyncOperationDetailsRequest('operation-123');
        $response = $service->getAsyncOperationDetails($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    /**
     * @param list<Response> $responses
     */
    private function createService(array $responses, array &$history): AsyncOperationsService
    {
        $mock = new MockHandler($responses);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, Config::sandbox('key', 'secret'));

        return new AsyncOperationsService($apiClient);
    }

    /**
     * @param array<string, mixed> $body
     */
    private function jsonResponse(int $statusCode, array $body): Response
    {
        return new Response($statusCode, ['Content-Type' => 'application/json'], json_encode($body, JSON_THROW_ON_ERROR));
    }

}
