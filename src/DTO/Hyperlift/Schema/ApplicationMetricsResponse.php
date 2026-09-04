<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Schema;

class ApplicationMetricsResponse
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMetricSeries> $metrics
     */
    public function __construct(
        public readonly array $metrics
    ) {
        if ($metrics !== null) { foreach ($metrics as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Hyperlift\\Schema\\ApplicationMetricSeries'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('metrics', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMetricSeries::fromArray($item), $data['metrics']) : throw new \InvalidArgumentException("Missing required field metrics for ApplicationMetricsResponse")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['metrics'] = array_map(static fn ($item) => $item->toArray(), $this->metrics);
        return $data;
    }
}
