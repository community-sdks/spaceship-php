<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Request;

final class ReadAttributeDetailsRequest
{
    public function __construct(
        public readonly string $contact
    ) {
    }

    public function resolvePath(): string
    {
        $path = "/v1/contacts/attributes/{contact}";
        $path = str_replace('{contact}', (string) $this->contact, $path);
        return $path;
    }

    /**
     * @return array<string, scalar|list<scalar>>
     */
    public function toQueryParams(): array
    {
        return [

        ];
    }

    /**
     * @return array<string, string>
     */
    public function toHeaders(): array
    {
        return [];
    }

    /**
     * @return array<string, scalar|array|null>|null
     */
    public function toBody(): ?array
    {
        return null;
    }

    public static function sample(): self
    {
        return new self(
            '1ZdMXpapqp9sle5dl8BlppTJXAzf5',
        );
    }
}
