<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Contacts\Response;

use CommunitySDKs\Spaceship\DTO\Contacts\Schema\ContactDetails;
use Psr\Http\Message\ResponseInterface;

final class ReadDetailsResponse
{
    /**
     * @param array<string, string|string[]> $headers
     */
    public function __construct(
        public readonly int $statusCode,
        public readonly array $headers,
        public readonly ContactDetails $data,
    ) {
    }

    public static function fromPsrResponse(ResponseInterface $response): self
    {
        $decoded = (array) json_decode((string) $response->getBody(), true, 512, JSON_THROW_ON_ERROR);

        return new self($response->getStatusCode(), $response->getHeaders(), ContactDetails::fromArray($decoded));
    }
}
