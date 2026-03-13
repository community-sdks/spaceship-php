<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Http;

use CommunitySDKs\Spaceship\Config\SpaceshipConfig;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\ResponseInterface;

final class ApiClient
{
    public function __construct(
        private readonly ClientInterface $httpClient,
        private readonly SpaceshipConfig $config,
    ) {
    }

    /**
     * @param array<string, scalar|list<scalar>> $query
     * @param array<string, string> $headers
     * @param array<string, scalar|array|null>|null $jsonBody
     */
    public function request(string $method, string $path, array $query = [], array $headers = [], ?array $jsonBody = null): ResponseInterface
    {
        $requestHeaders = array_merge([
            'Accept' => 'application/json',
            'X-Api-Key' => $this->config->apiKey,
            'X-Api-Secret' => $this->config->apiSecret,
        ], $headers);

        $options = [
            'headers' => $requestHeaders,
            'query' => $query,
            'timeout' => $this->config->timeoutSeconds,
        ];

        if ($jsonBody !== null) {
            $options['headers']['Content-Type'] = 'application/json';
            $options['body'] = Utils::streamFor((string) json_encode($jsonBody, JSON_UNESCAPED_SLASHES));
        }

        return $this->httpClient->request($method, $this->config->environment->value . $path, $options);
    }
}
