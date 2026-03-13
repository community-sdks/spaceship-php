<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Tests\Service;

use CommunitySDKs\Spaceship\Config\SpaceshipConfig;
use CommunitySDKs\Spaceship\Http\ApiClient;
use CommunitySDKs\Spaceship\Service\DomainsService;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class DomainsServiceTest extends TestCase
{
    public function testGetdomainlist(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"ok\":true}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\GetdomainlistRequest::sample();
        $response = $service->getDomainList($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testCheckdomainsavailability(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\CheckdomainsavailabilityRequest::sample();
        $response = $service->checkDomainsAvailability($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testGetdomaininfo(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\GetdomaininfoRequest::sample();
        $response = $service->getDomainInfo($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testDomaindelete(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(204, ['Content-Type' => 'application/json'], "")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\DomaindeleteRequest::sample();
        $response = $service->domainDelete($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('DELETE', $history[0]['request']->getMethod());
    }

    public function testDomaincreate(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(202, ['Content-Type' => 'application/json'], "{\"ok\":true}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\DomaincreateRequest::sample();
        $response = $service->domainCreate($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testUpdateautorenewal(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\UpdateautorenewalRequest::sample();
        $response = $service->updateAutorenewal($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testChecksingledomainavailability(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\ChecksingledomainavailabilityRequest::sample();
        $response = $service->checkSingleDomainAvailability($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testSetdomaincontacts(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\SetdomaincontactsRequest::sample();
        $response = $service->setDomainContacts($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testSetdomainnameservers(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\SetdomainnameserversRequest::sample();
        $response = $service->setDomainNameservers($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testGetdomainpersonalnameservers(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\GetdomainpersonalnameserversRequest::sample();
        $response = $service->getDomainPersonalNameservers($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testGetdomainpersonalnameserverhostinfo(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\GetdomainpersonalnameserverhostinfoRequest::sample();
        $response = $service->getDomainPersonalNameserverHostInfo($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testUpdatedomainpersonalnameserverhostinfo(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\UpdatedomainpersonalnameserverhostinfoRequest::sample();
        $response = $service->updateDomainPersonalNameserverHostInfo($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testDeletedomainpersonalnameserverhostinfo(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(204, ['Content-Type' => 'application/json'], "")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\DeletedomainpersonalnameserverhostinfoRequest::sample();
        $response = $service->deleteDomainPersonalNameserverHostInfo($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('DELETE', $history[0]['request']->getMethod());
    }

    public function testUpdatedomainemailprotectionpreference(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(204, ['Content-Type' => 'application/json'], "")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\UpdatedomainemailprotectionpreferenceRequest::sample();
        $response = $service->updateDomainEmailProtectionPreference($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testUpdatedomainprivacypreference(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(204, ['Content-Type' => 'application/json'], "")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\UpdatedomainprivacypreferenceRequest::sample();
        $response = $service->updateDomainPrivacyPreference($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testDomainrenew(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(202, ['Content-Type' => 'application/json'], "{\"ok\":true}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\DomainrenewRequest::sample();
        $response = $service->domainRenew($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testDomainrestore(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(202, ['Content-Type' => 'application/json'], "{\"ok\":true}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\DomainrestoreRequest::sample();
        $response = $service->domainRestore($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testTransferrequest(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(202, ['Content-Type' => 'application/json'], "{\"ok\":true}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\TransferrequestRequest::sample();
        $response = $service->transferRequest($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testGettransferinfo(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\GettransferinfoRequest::sample();
        $response = $service->getTransferInfo($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testGetauthcode(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\GetauthcodeRequest::sample();
        $response = $service->getAuthCode($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testUpdatetransferlock(): void
    {
        $history = [];
        $mock = new MockHandler([new Response(200, ['Content-Type' => 'application/json'], "{\"x\":\"y\"}")]);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, SpaceshipConfig::sandbox('key', 'secret'));
        $service = new DomainsService($apiClient);
        $request = \CommunitySDKs\Spaceship\DTO\Request\UpdatetransferlockRequest::sample();
        $response = $service->updateTransferLock($request);
        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

}
