<?php

declare(strict_types=1);

namespace CommunitySDKs\Spaceship\DTO\DNSRecords\Schema;

class ResourceRecordDeleteItem
{
    public function __construct(
        public readonly string $type,
        public readonly \CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue $name
    ) {

    }

    public static function fromArray(array $data): self
    {
        $type = $data['type'] ?? null;
        switch ($type) {
            case 'AAAA': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AaaaResourceRecordDeleteItem::fromArray($data);
            case 'ALIAS': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AliasResourceRecordDeleteItem::fromArray($data);
            case 'A': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AResourceRecordDeleteItem::fromArray($data);
            case 'CAA': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\CaaResourceRecordDeleteItem::fromArray($data);
            case 'CNAME': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\CNameResourceRecordDeleteItem::fromArray($data);
            case 'HTTPS': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\HttpsResourceRecordDeleteItem::fromArray($data);
            case 'MX': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\MxResourceRecordDeleteItem::fromArray($data);
            case 'NS': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\NsResourceRecordDeleteItem::fromArray($data);
            case 'PTR': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\PtrResourceRecordDeleteItem::fromArray($data);
            case 'SRV': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\SrvResourceRecordDeleteItem::fromArray($data);
            case 'SVCB': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\SvcbResourceRecordDeleteItem::fromArray($data);
            case 'TLSA': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\TlsaResourceRecordDeleteItem::fromArray($data);
            case 'TXT': return \CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\TxtResourceRecordDeleteItem::fromArray($data);
            default: throw new \InvalidArgumentException("Unknown discriminator for ResourceRecordDeleteItem");
        }
    }

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type;
        $data['name'] = $this->name->toValue();
        return $data;
    }
}
