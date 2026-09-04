<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO;

/** Runtime checks for PHP collections, whose element types cannot be declared natively. */
final class ValueValidator
{
    public static function check(mixed $value, string $type): void
    {
        $valid = match ($type) {
            'string' => is_string($value),
            'int' => is_int($value),
            'float' => is_float($value) || is_int($value),
            'bool' => is_bool($value),
            'array' => is_array($value),
            default => $value instanceof $type,
        };
        if (!$valid) {
            throw new \InvalidArgumentException('Expected collection item of type ' . $type);
        }
    }
}
