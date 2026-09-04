<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class ResourceRecordCreateOrUpdateItem
{
    public function __construct(
        public readonly string $type,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name,
        public readonly int|null $ttl = null
    ) {

    }

    public static function fromArray(array $data): self
    {
        $type = $data['type'] ?? null;
        switch ($type) {
            case 'AAAA': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AaaaResourceRecordCreateOrUpdateItem::fromArray($data);
            case 'ALIAS': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AliasResourceRecordCreateOrUpdateItem::fromArray($data);
            case 'A': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AResourceRecordCreateOrUpdateItem::fromArray($data);
            case 'CAA': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\CaaResourceRecordCreateOrUpdateItem::fromArray($data);
            case 'CNAME': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\CNameResourceRecordCreateOrUpdateItem::fromArray($data);
            case 'HTTPS': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\HttpsResourceRecordCreateOrUpdateItem::fromArray($data);
            case 'MX': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\MxResourceRecordCreateOrUpdateItem::fromArray($data);
            case 'NS': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\NsResourceRecordCreateOrUpdateItem::fromArray($data);
            case 'PTR': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\PtrResourceRecordCreateOrUpdateItem::fromArray($data);
            case 'SRV': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\SrvResourceRecordCreateOrUpdateItem::fromArray($data);
            case 'SVCB': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\SvcbResourceRecordCreateOrUpdateItem::fromArray($data);
            case 'TLSA': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\TlsaResourceRecordCreateOrUpdateItem::fromArray($data);
            case 'TXT': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\TxtResourceRecordCreateOrUpdateItem::fromArray($data);
            default: throw new \InvalidArgumentException("Unknown discriminator for ResourceRecordCreateOrUpdateItem");
        }
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        if ($this->ttl !== null) { $data['ttl'] = $this->ttl; }
        return $data;
    }
}
