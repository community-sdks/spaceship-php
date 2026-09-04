<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Response;

final class DeleteRecordsResponse
{
    /** @param array<string, list<string>> $headers */
    public function __construct(
        public readonly int $statusCode,
        public readonly array $headers,
        public readonly null $data = null
    ) {}

    public function operationId(): ?\CommunitySDKs\Spaceship\DTO\Common\Schema\OperationId
    {
        foreach ($this->headers as $name => $values) {
            if (strtolower($name) === "spaceship-operation-id" && isset($values[0])) {
                return new \CommunitySDKs\Spaceship\DTO\Common\Schema\OperationId($values[0]);
            }
        }
        return null;
    }

    public static function fromPsrResponse(\Psr\Http\Message\ResponseInterface $response): self
    {
        return new self($response->getStatusCode(), $response->getHeaders(), null);
    }
}
