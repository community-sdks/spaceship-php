<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Tests\Service;

use CommunitySDKs\Spaceship\Config\Config;
use CommunitySDKs\Spaceship\DTO\Common\Schema\Currency;
use CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue;
use CommunitySDKs\Spaceship\DTO\SellerHub\Enum\CheckoutLinkType;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateCheckoutLinkRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\CreateSellerHubDomainRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\DeleteSellerHubDomainRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSellerHubDomainListRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetSellerHubDomainRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\GetVerificationRecordsRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Request\UpdateSellerHubDomainRequest;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateCheckoutLinkRequest as CreateCheckoutLinkBody;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateSellerHubDomainRequest as CreateSellerHubDomainBody;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DisplayName;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DomainDescription;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName;
use CommunitySDKs\Spaceship\DTO\SellerHub\Schema\UpdateSellerHubDomainRequest as UpdateSellerHubDomainBody;
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
        $service = $this->createService([
            $this->jsonResponse(200, ['url' => 'https://example.com/checkout/abc']),
        ], $history);
        $request = new CreateCheckoutLinkRequest($this->checkoutLinkBody());
        $response = $service->createCheckoutLink($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testGetsellerhubdomainlist(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, ['items' => []]),
        ], $history);
        $request = new GetSellerHubDomainListRequest(20, 0);
        $response = $service->getSellerHubDomainList($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testCreatesellerhubdomain(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(201, $this->sellerHubDomainPayload()),
        ], $history);
        $request = new CreateSellerHubDomainRequest($this->sellerHubCreateBody());
        $response = $service->createSellerHubDomain($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testGetsellerhubdomain(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, $this->sellerHubDomainPayload()),
        ], $history);
        $request = new GetSellerHubDomainRequest('example.com');
        $response = $service->getSellerHubDomain($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testUpdatesellerhubdomain(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, $this->sellerHubDomainPayload()),
        ], $history);
        $request = new UpdateSellerHubDomainRequest('example.com', $this->sellerHubUpdateBody());
        $response = $service->updateSellerHubDomain($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PATCH', $history[0]['request']->getMethod());
    }

    public function testDeletesellerhubdomain(): void
    {
        $history = [];
        $service = $this->createService([
            new Response(204, ['Content-Type' => 'application/json'], ''),
        ], $history);
        $request = new DeleteSellerHubDomainRequest('example.com');
        $response = $service->deleteSellerHubDomain($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('DELETE', $history[0]['request']->getMethod());
    }

    public function testGetverificationrecords(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, [
                'options' => [[
                    'records' => [[
                        'type' => 'TXT',
                        'name' => '_verify',
                        'value' => 'token-123',
                    ]],
                ]],
            ]),
        ], $history);
        $request = new GetVerificationRecordsRequest();
        $response = $service->getVerificationRecords($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    /**
     * @param list<Response> $responses
     */
    private function createService(array $responses, array &$history): SellerHubService
    {
        $mock = new MockHandler($responses);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, Config::sandbox('key', 'secret'));

        return new SellerHubService($apiClient);
    }

    private function checkoutLinkBody(): CreateCheckoutLinkBody
    {
        return new CreateCheckoutLinkBody(
            CheckoutLinkType::BUY_NOW,
            new Price('12.99', Currency::fromValue('USD')),
            SellerhubDomainName::fromValue('example.com'),
        );
    }

    private function sellerHubCreateBody(): CreateSellerHubDomainBody
    {
        return new CreateSellerHubDomainBody(
            DomainDescription::fromValue('Premium domain'),
            DisplayName::fromValue('Example Domain'),
            true,
            new Price('1499.00', Currency::fromValue('USD')),
            true,
            new Price('999.00', Currency::fromValue('USD')),
            SellerhubDomainName::fromValue('example.com'),
        );
    }

    private function sellerHubUpdateBody(): UpdateSellerHubDomainBody
    {
        return new UpdateSellerHubDomainBody(
            DomainDescription::fromValue('Updated description'),
            DisplayName::fromValue('Updated display'),
            true,
            null,
            true,
            null,
        );
    }

    /**
     * @return array<string, mixed>
     */
    private function sellerHubDomainPayload(): array
    {
        return [
            'name' => 'example.com',
            'unicodeName' => 'example.com',
            'status' => 'onSale',
        ];
    }

    /**
     * @param array<string, mixed> $body
     */
    private function jsonResponse(int $statusCode, array $body): Response
    {
        return new Response($statusCode, ['Content-Type' => 'application/json'], json_encode($body, JSON_THROW_ON_ERROR));
    }

}
