<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\Hyperlift\Request;

final class GetHyperliftApplicationMetricsRequest extends \CommunitySDKs\Spaceship\DTO\BaseRequest
{
    public function __construct(
        public readonly string $id,
        public readonly string $startDate,
        public readonly string $endDate,
        public readonly string $interval,
        public readonly string $metrics
    ) {

    }

    public function toQueryParams(): array
    {
        $values = [];
        if ($this->startDate !== null) { $values['startDate'] = $this->startDate; }
        if ($this->endDate !== null) { $values['endDate'] = $this->endDate; }
        if ($this->interval !== null) { $values['interval'] = $this->interval; }
        if ($this->metrics !== null) { $values['metrics'] = $this->metrics; }
        return $values;
    }
}
