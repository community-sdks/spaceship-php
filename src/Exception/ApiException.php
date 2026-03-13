<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\Exception;

use RuntimeException;

class ApiException extends RuntimeException
{
    /**
     * @param array<string, string|string[]|int> $headers
     */
    public function __construct(
        string $message,
        public readonly int $statusCode,
        public readonly array $headers = [],
        public readonly ?string $responseBody = null,
        ?\Throwable $previous = null,
    ) {
        parent::__construct($message, $statusCode, $previous);
    }
}
