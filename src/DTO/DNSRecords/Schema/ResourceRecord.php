<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class ResourceRecord
{
    public function __construct(
        public readonly string $type,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        public readonly int|null $ttl,
        public readonly \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup $group
    ) {

    }

    public static function fromArray(array $data): self
    {
        $type = $data['type'] ?? null;
        switch ($type) {
            case 'AAAA': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AaaaResourceRecord::fromArray($data);
            case 'ALIAS': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AliasResourceRecord::fromArray($data);
            case 'A': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AResourceRecord::fromArray($data);
            case 'CAA': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\CaaResourceRecord::fromArray($data);
            case 'CNAME': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\CNameResourceRecord::fromArray($data);
            case 'HTTPS': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\HttpsResourceRecord::fromArray($data);
            case 'MX': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\MxResourceRecord::fromArray($data);
            case 'NS': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\NsResourceRecord::fromArray($data);
            case 'PTR': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\PtrResourceRecord::fromArray($data);
            case 'SRV': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\SrvResourceRecord::fromArray($data);
            case 'SVCB': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\SvcbResourceRecord::fromArray($data);
            case 'TLSA': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\TlsaResourceRecord::fromArray($data);
            case 'TXT': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\TxtResourceRecord::fromArray($data);
            default: throw new \InvalidArgumentException("Unknown discriminator for ResourceRecord");
        }
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        if ($this->ttl !== null) { $data['ttl'] = $this->ttl; }
        $data['group'] = $this->group->toArray();
        return $data;
    }
}
