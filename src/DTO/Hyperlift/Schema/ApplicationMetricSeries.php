<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Schema;

class ApplicationMetricSeries
{
    /**
     * @param list<\CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMetricSample> $samples
     */
    public function __construct(
        public readonly string $name,
        public readonly \CommunitySDKs\Spaceship\DTO\Hyperlift\Enum\MetricUnit $unit,
        public readonly float|null $quota,
        public readonly array $samples
    ) {
        if ($samples !== null) { foreach ($samples as $item) { \CommunitySDKs\Spaceship\DTO\ValueValidator::check($item, 'CommunitySDKs\\Spaceship\\DTO\\Hyperlift\\Schema\\ApplicationMetricSample'); } }
    }

    public static function fromArray(array $data): self
    {
        return new self(
            array_key_exists('name', $data) ? $data['name'] : throw new \InvalidArgumentException("Missing required field name for ApplicationMetricSeries"),
            array_key_exists('unit', $data) ? \CommunitySDKs\Spaceship\DTO\Hyperlift\Enum\MetricUnit::fromValue($data['unit']) : throw new \InvalidArgumentException("Missing required field unit for ApplicationMetricSeries"),
            array_key_exists('quota', $data) ? ($data['quota'] === null ? null : $data['quota']) : null,
            array_key_exists('samples', $data) ? array_map(static fn ($item) => \CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMetricSample::fromArray($item), $data['samples']) : throw new \InvalidArgumentException("Missing required field samples for ApplicationMetricSeries")
        );
    }

    public function toArray(): array
    {
        $data = [];
        $data['name'] = $this->name;
        $data['unit'] = $this->unit->toValue();
        if ($this->quota !== null) { $data['quota'] = $this->quota; }
        $data['samples'] = array_map(static fn ($item) => $item->toArray(), $this->samples);
        return $data;
    }
}
