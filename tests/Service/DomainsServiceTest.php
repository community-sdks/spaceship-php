<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Tests\Service;

use CommunitySDKs\Spaceship\Config\Config;
use CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate;
use CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel as DomainPrivacyLevelEnum;
use CommunitySDKs\Spaceship\DTO\Domains\Enum\Provider as ProviderEnum;
use CommunitySDKs\Spaceship\DTO\Domains\Request\CheckDomainsAvailabilityRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\CheckSingleDomainAvailabilityRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\DeleteDomainPersonalNameserverHostInfoRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\DomainCreateRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\DomainDeleteRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\DomainRenewRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\DomainRestoreRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetAuthCodeRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainInfoRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainListRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainPersonalNameserverHostInfoRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetDomainPersonalNameserversRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\GetTransferInfoRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\SetDomainContactsRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\SetDomainNameserversRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\TransferRequestRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateAutorenewalRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainEmailProtectionPreferenceRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainPersonalNameserverHostInfoRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateDomainPrivacyPreferenceRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Request\UpdateTransferLockRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\AuthCode;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainContacts;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainCreateRequest as DomainCreateBody;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainName;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameServersConfigurationRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPrivacyOptions;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainAutoRenewal;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainEmailProtectionPreference;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainPrivacyPreference;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainRenewalRequestInfo;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainTransferLock;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsGetDomainsAvailabilityRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainTransferRequest;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\Fqdn;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\Host;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\IpAddress;
use CommunitySDKs\Spaceship\DTO\Domains\Schema\PersonalNameserverRecord;
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
        $service = $this->createService([
            $this->jsonResponse(200, ['items' => []]),
        ], $history);
        $request = new GetDomainListRequest(10, 0, []);
        $response = $service->getDomainList($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testCheckdomainsavailability(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, ['domains' => [$this->domainAvailabilityPayload()]]),
        ], $history);
        $request = new CheckDomainsAvailabilityRequest(new DomainsGetDomainsAvailabilityRequest([
            DomainName::fromValue('example.com'),
        ]));
        $response = $service->checkDomainsAvailability($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testGetdomaininfo(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, $this->domainInfoPayload()),
        ], $history);
        $request = new GetDomainInfoRequest('example.com');
        $response = $service->getDomainInfo($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testDomaindelete(): void
    {
        $history = [];
        $service = $this->createService([
            new Response(204, ['Content-Type' => 'application/json'], ''),
        ], $history);
        $request = new DomainDeleteRequest('example.com');
        $response = $service->domainDelete($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('DELETE', $history[0]['request']->getMethod());
    }

    public function testDomaincreate(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(202, ['accepted' => true]),
        ], $history);
        $request = new DomainCreateRequest('example.com', $this->domainCreateBody());
        $response = $service->domainCreate($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testUpdateautorenewal(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, ['isEnabled' => true]),
        ], $history);
        $request = new UpdateAutorenewalRequest('example.com', new DomainsDomainAutoRenewal(true));
        $response = $service->updateAutorenewal($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testChecksingledomainavailability(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, $this->domainAvailabilityPayload()),
        ], $history);
        $request = new CheckSingleDomainAvailabilityRequest('example.com');
        $response = $service->checkSingleDomainAvailability($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testSetdomaincontacts(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, ['verificationStatus' => 'success']),
        ], $history);
        $request = new SetDomainContactsRequest('example.com', $this->domainContacts());
        $response = $service->setDomainContacts($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testSetdomainnameservers(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, ['provider' => 'basic', 'hosts' => ['ns1.example.com']]),
        ], $history);
        $request = new SetDomainNameserversRequest('example.com', $this->nameserversRequest());
        $response = $service->setDomainNameservers($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testGetdomainpersonalnameservers(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, ['records' => [['host' => 'ns1', 'ips' => ['203.0.113.10']]]]),
        ], $history);
        $request = new GetDomainPersonalNameserversRequest('example.com');
        $response = $service->getDomainPersonalNameservers($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testGetdomainpersonalnameserverhostinfo(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, ['ips' => ['203.0.113.10']]),
        ], $history);
        $request = new GetDomainPersonalNameserverHostInfoRequest('example.com', 'ns1');
        $response = $service->getDomainPersonalNameserverHostInfo($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testUpdatedomainpersonalnameserverhostinfo(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, ['host' => 'ns1', 'ips' => ['203.0.113.10']]),
        ], $history);
        $request = new UpdateDomainPersonalNameserverHostInfoRequest('example.com', 'ns1', $this->personalNameserverRecord());
        $response = $service->updateDomainPersonalNameserverHostInfo($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testDeletedomainpersonalnameserverhostinfo(): void
    {
        $history = [];
        $service = $this->createService([
            new Response(204, ['Content-Type' => 'application/json'], ''),
        ], $history);
        $request = new DeleteDomainPersonalNameserverHostInfoRequest('example.com', 'ns1');
        $response = $service->deleteDomainPersonalNameserverHostInfo($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('DELETE', $history[0]['request']->getMethod());
    }

    public function testUpdatedomainemailprotectionpreference(): void
    {
        $history = [];
        $service = $this->createService([
            new Response(204, ['Content-Type' => 'application/json'], ''),
        ], $history);
        $request = new UpdateDomainEmailProtectionPreferenceRequest('example.com', new DomainsDomainEmailProtectionPreference(true));
        $response = $service->updateDomainEmailProtectionPreference($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testUpdatedomainprivacypreference(): void
    {
        $history = [];
        $service = $this->createService([
            new Response(204, ['Content-Type' => 'application/json'], ''),
        ], $history);
        $request = new UpdateDomainPrivacyPreferenceRequest('example.com', new DomainsDomainPrivacyPreference(DomainPrivacyLevelEnum::HIGH, true));
        $response = $service->updateDomainPrivacyPreference($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testDomainrenew(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(202, ['accepted' => true]),
        ], $history);
        $request = new DomainRenewRequest('example.com', new DomainsDomainRenewalRequestInfo(1, IsoDate::fromValue('2026-12-31T00:00:00Z')));
        $response = $service->domainRenew($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testDomainrestore(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(202, ['accepted' => true]),
        ], $history);
        $request = new DomainRestoreRequest('example.com');
        $response = $service->domainRestore($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testTransferrequest(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(202, ['accepted' => true]),
        ], $history);
        $request = new TransferRequestRequest('example.com', new DomainTransferRequest(true, $this->domainPrivacyOptions(), $this->domainContacts(), AuthCode::fromValue('AUTH-123')));
        $response = $service->transferRequest($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('POST', $history[0]['request']->getMethod());
    }

    public function testGettransferinfo(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, [
                'startedAt' => '2026-03-14T00:00:00Z',
                'direction' => 'in',
                'status' => 'pending',
            ]),
        ], $history);
        $request = new GetTransferInfoRequest('example.com');
        $response = $service->getTransferInfo($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testGetauthcode(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, [
                'authCode' => 'AUTH-123',
                'expires' => '2026-03-31T00:00:00Z',
            ]),
        ], $history);
        $request = new GetAuthCodeRequest('example.com');
        $response = $service->getAuthCode($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    public function testUpdatetransferlock(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, ['isLocked' => true]),
        ], $history);
        $request = new UpdateTransferLockRequest('example.com', new DomainsDomainTransferLock(true));
        $response = $service->updateTransferLock($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    /**
     * @param list<Response> $responses
     */
    private function createService(array $responses, array &$history): DomainsService
    {
        $mock = new MockHandler($responses);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, Config::sandbox('key', 'secret'));

        return new DomainsService($apiClient);
    }

    private function domainPrivacyOptions(): DomainPrivacyOptions
    {
        return new DomainPrivacyOptions(DomainPrivacyLevelEnum::HIGH, true);
    }

    private function domainContacts(): DomainContacts
    {
        return new DomainContacts(
            ContactId::fromValue('contact-123'),
            null,
            null,
            null,
            null,
        );
    }

    private function nameserversRequest(): DomainNameServersConfigurationRequest
    {
        return new DomainNameServersConfigurationRequest(
            ProviderEnum::BASIC,
            [Fqdn::fromValue('ns1.example.com')],
        );
    }

    private function personalNameserverRecord(): PersonalNameserverRecord
    {
        return new PersonalNameserverRecord(
            Host::fromValue('ns1'),
            [IpAddress::fromValue('203.0.113.10')],
        );
    }

    private function domainCreateBody(): DomainCreateBody
    {
        return new DomainCreateBody(true, 1, $this->domainPrivacyOptions(), $this->domainContacts());
    }

    /**
     * @return array<string, mixed>
     */
    private function domainAvailabilityPayload(): array
    {
        return [
            'domain' => 'example.com',
            'result' => 'available',
            'premiumPricing' => [],
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function domainInfoPayload(): array
    {
        return [
            'name' => 'example.com',
            'unicodeName' => 'example.com',
            'isPremium' => false,
            'autoRenew' => true,
            'registrationDate' => '2026-01-01T00:00:00Z',
            'expirationDate' => '2027-01-01T00:00:00Z',
            'lifecycleStatus' => 'registered',
            'verificationStatus' => 'success',
            'eppStatuses' => [],
            'suspensions' => [],
            'privacyProtection' => [
                'contactForm' => true,
                'level' => 'high',
            ],
            'nameservers' => [
                'provider' => 'basic',
                'hosts' => ['ns1.example.com'],
            ],
            'contacts' => [
                'registrant' => 'contact-123',
            ],
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
