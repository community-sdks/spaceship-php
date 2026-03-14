<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Tests\Service;

use CommunitySDKs\Spaceship\Config\Config;
use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IpV4Address;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Request\DeleteRecordsRequest;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Request\GetResourceRecordsListRequest;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Request\SaveRecordsRequest;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AResourceRecordCreateOrUpdateItem;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AResourceRecordDeleteItem;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\RecordsRecordsUpdateModel;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListCreateOrUpdateItem;
use CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListDeleteItem;
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
        $service = $this->createService([
            new Response(204, ['Content-Type' => 'application/json'], ''),
        ], $history);
        $request = new SaveRecordsRequest('example.com', $this->recordsUpdateModel());
        $response = $service->saveRecords($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testDeleterecords(): void
    {
        $history = [];
        $service = $this->createService([
            new Response(204, ['Content-Type' => 'application/json'], ''),
        ], $history);
        $request = new DeleteRecordsRequest('example.com', $this->recordsDeleteModel());
        $response = $service->deleteRecords($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('DELETE', $history[0]['request']->getMethod());
    }

    public function testGetresourcerecordslist(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, ['items' => []]),
        ], $history);
        $request = new GetResourceRecordsListRequest('example.com', 10, 0, []);
        $response = $service->getResourceRecordsList($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    /**
     * @param list<Response> $responses
     */
    private function createService(array $responses, array &$history): DNSRecordsService
    {
        $mock = new MockHandler($responses);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, Config::sandbox('key', 'secret'));

        return new DNSRecordsService($apiClient);
    }

    private function recordsUpdateModel(): RecordsRecordsUpdateModel
    {
        return new RecordsRecordsUpdateModel(
            false,
            new ResourceRecordsListCreateOrUpdateItem([
                new AResourceRecordCreateOrUpdateItem(
                    'A',
                    HostNameValue::fromValue('www'),
                    300,
                    IpV4Address::fromValue('203.0.113.10'),
                ),
            ]),
        );
    }

    private function recordsDeleteModel(): ResourceRecordsListDeleteItem
    {
        return new ResourceRecordsListDeleteItem([
            new AResourceRecordDeleteItem(
                'A',
                HostNameValue::fromValue('www'),
                IpV4Address::fromValue('203.0.113.10'),
            ),
        ]);
    }

    /**
     * @param array<string, mixed> $body
     */
    private function jsonResponse(int $statusCode, array $body): Response
    {
        return new Response($statusCode, ['Content-Type' => 'application/json'], json_encode($body, JSON_THROW_ON_ERROR));
    }

}
