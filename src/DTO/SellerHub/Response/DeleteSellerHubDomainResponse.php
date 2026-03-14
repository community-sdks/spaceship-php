<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\SellerHub\Response;

use Psr\Http\Message\ResponseInterface;

final class DeleteSellerHubDomainResponse
{
    /**
     * @param array<string, string|string[]> $headers
     */
    public function __construct(
        public readonly int $statusCode,
        public readonly array $headers,
        public readonly ?array $data = null,
    ) {
    }

    public static function fromPsrResponse(ResponseInterface $response): self
    {
        $body = (string) $response->getBody();
        $decoded = $body === '' ? null : (array) json_decode($body, true, 512, JSON_THROW_ON_ERROR);
        return new self($response->getStatusCode(), $response->getHeaders(), $decoded);
    }
}
