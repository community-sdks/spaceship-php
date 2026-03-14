<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Tests\Service;

use CommunitySDKs\Spaceship\Config\Config;
use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\ReadAttributeDetailsRequest;
use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Request\SaveContactAttributesRequest;
use CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\UsAttributeDetails;
use CommunitySDKs\Spaceship\Http\ApiClient;
use CommunitySDKs\Spaceship\Service\ContactsAttributesService;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class ContactsAttributesServiceTest extends TestCase
{
    public function testSavecontactattributes(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, ['contactId' => 'contact-123']),
        ], $history);
        $request = new SaveContactAttributesRequest($this->attributeDetails());
        $response = $service->saveContactAttributes($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('PUT', $history[0]['request']->getMethod());
    }

    public function testReadattributedetails(): void
    {
        $history = [];
        $service = $this->createService([
            $this->jsonResponse(200, [
                'type' => 'us',
                'appPurpose' => 'P1',
                'nexusCategory' => 'C11',
            ]),
        ], $history);
        $request = new ReadAttributeDetailsRequest('contact-123');
        $response = $service->readAttributeDetails($request);

        self::assertNotNull($response);
        self::assertCount(1, $history);
        self::assertSame('GET', $history[0]['request']->getMethod());
    }

    /**
     * @param list<Response> $responses
     */
    private function createService(array $responses, array &$history): ContactsAttributesService
    {
        $mock = new MockHandler($responses);
        $stack = HandlerStack::create($mock);
        $stack->push(Middleware::history($history));
        $httpClient = new Client(['handler' => $stack]);
        $apiClient = new ApiClient($httpClient, Config::sandbox('key', 'secret'));

        return new ContactsAttributesService($apiClient);
    }

    private function attributeDetails(): UsAttributeDetails
    {
        return new UsAttributeDetails('us', 'P1', 'C11');
    }

    /**
     * @param array<string, mixed> $body
     */
    private function jsonResponse(int $statusCode, array $body): Response
    {
        return new Response($statusCode, ['Content-Type' => 'application/json'], json_encode($body, JSON_THROW_ON_ERROR));
    }

}
