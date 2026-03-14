<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Tests\Service;

use CommunitySDKs\Spaceship\Config\Config;
use CommunitySDKs\Spaceship\DTO\Contacts\Request\ReadDetailsRequest;
use CommunitySDKs\Spaceship\DTO\Contacts\Request\SaveDetailsRequest;
use CommunitySDKs\Spaceship\DTO\Contacts\Schema\ContactDetails;
use CommunitySDKs\Spaceship\DTO\Contacts\Schema\CountryCode;
use CommunitySDKs\Spaceship\DTO\Contacts\Schema\Phone;
use CommunitySDKs\Spaceship\Http\ApiClient;
use CommunitySDKs\Spaceship\Service\ContactsService;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class ContactsServiceTest extends TestCase
{
    public function testSavedetails(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, ['contactId' => 'contact-123']),
        ], $history);
        $request = new SaveDetailsRequest($this->contactDetails());
        $response = $service->saveDetails($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testReaddetails(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, $this->contactDetailsPayload()),
        ], $history);
        $request = new ReadDetailsRequest('contact-123');
        $response = $service->readDetails($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    /**
     * @param list<Response> $responses
     */
    private function createService(array $responses, array &$history): ContactsService
    {
        $mock = new MockHandler($responses);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, Config::sandbox('key', 'secret'));

        return new ContactsService($apiClient);
    }

    private function contactDetails(): ContactDetails
    {
        return new ContactDetails(
            'Ada',
            'Lovelace',
            null,
            'ada@example.com',
            '123 Main Street',
            null,
            'Phoenix',
            CountryCode::fromValue('US'),
            null,
            null,
            Phone::fromValue('+14805550100'),
            null,
            null,
            null,
            null,
        );
    }

    /**
     * @return array<string, mixed>
     */
    private function contactDetailsPayload(): array
    {
        return [
            'firstName' => 'Ada',
            'lastName' => 'Lovelace',
            'email' => 'ada@example.com',
            'address1' => '123 Main Street',
            'city' => 'Phoenix',
            'country' => 'US',
            'phone' => '+14805550100',
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
