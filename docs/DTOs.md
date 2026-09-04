# DTO reference

Generated from `openapi.json`. Object DTOs provide `fromArray()` and `toArray()`; scalar wrappers and enums provide `fromValue()` and `toValue()`. PHP collection element types are documented and checked at construction. Required nullable fields must be present during hydration. Optional null values are omitted during serialization. Constraints listed below are API requirements; the SDK checks PHP types and discriminators, not every server-side validation rule.

## `AResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AResourceRecord`

Used to map a domain name to its corresponding IPv4 address

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["A"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `address` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IpV4Address` | yes |  |

## `AResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AResourceRecordCreateOrUpdateItem`

Used to map a domain name to its corresponding IPv4 address

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["A"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `address` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IpV4Address` | yes |  |

## `AResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AResourceRecordDeleteItem`

Used to map a domain name to its corresponding IPv4 address

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["A"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `address` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IpV4Address` | yes |  |

## `AaaaResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AaaaResourceRecord`

Used to map a domain name to its corresponding IPv6 address

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["AAAA"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `address` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IpV6Address` | yes |  |

## `AaaaResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AaaaResourceRecordCreateOrUpdateItem`

Used to map a domain name to its corresponding IPv6 address

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["AAAA"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `address` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IpV6Address` | yes |  |

## `AaaaResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AaaaResourceRecordDeleteItem`

Used to map a domain name to its corresponding IPv6 address

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["AAAA"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `address` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IpV6Address` | yes |  |

## `AliasResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AliasResourceRecord`

Used to create a CNAME-like behavior for apex domain where CNAME is not allowed

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["ALIAS"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `aliasName` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Canonical (true) domain name that is used to resolve resource records. Implements CNAME-like behavior for apex domain where CNAME is not allowed |

## `AliasResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AliasResourceRecordCreateOrUpdateItem`

Used to create a CNAME-like behavior for apex domain where CNAME is not allowed

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["ALIAS"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `aliasName` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Canonical (true) domain name that is used to resolve resource records. Implements CNAME-like behavior for apex domain where CNAME is not allowed |

## `AliasResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\AliasResourceRecordDeleteItem`

Used to create a CNAME-like behavior for apex domain where CNAME is not allowed

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["ALIAS"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `aliasName` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Canonical (true) domain name that is used to resolve resource records. Implements CNAME-like behavior for apex domain where CNAME is not allowed |

## `ApplicationLogLine`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationLogLine`

One log line of a Hyperlift application.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `message` | `string` | yes | The log line text. Constraints: `{"maxLength": 16384, "pattern": "^[\\s\\S]*$"}`. |
| `timestamp` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate or null` | no | Time the line was produced, as an ISO-8601 UTC datetime (second precision). Absent when the source line carried no timestamp. |

## `ApplicationLogsResponse`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationLogsResponse`

A bounded page of log lines, oldest first. Pass `cursor` back via the `cursor` query
parameter to fetch only the lines produced after this page; repeat to follow the log.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `items` | `list<\CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationLogLine>` | yes | Log lines, oldest first. Constraints: `{"maxItems": 100}`. |
| `cursor` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationLogsCursor or null` | no | Resume cursor for the next page. Absent while the application has not produced any lines yet. |
| `finished` | `bool` | yes | True when the log stream has ended, so pollers can stop: for runtime logs this means the application stopped, for build logs that the build completed. A later start or build produces a new stream. |

## `ApplicationMetricSample`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMetricSample`

A single metric sample: the value observed for one interval.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `timestamp` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate` | yes | Timestamp of the sample as a full ISO-8601 UTC datetime, marking the start of its interval bucket. |
| `value` | `float` | yes | Metric value averaged over the interval, in the series' `unit`. |

## `ApplicationMetricSeries`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMetricSeries`

Time series for one requested metric.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `name` | `string` | yes | Metric name, matching the value passed in the `metrics` query parameter. Constraints: `{"maxLength": 64, "pattern": "^[a-z][a-zA-Z0-9]*$"}`. |
| `unit` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Enum\MetricUnit` | yes | Unit of the series' sample values and quota. |
| `quota` | `float or null` | no | Plan-defined maximum for the metric, in the series' `unit`; present only where one applies (memory and the storage metrics). |
| `samples` | `list<\CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMetricSample>` | yes | Ordered samples for the metric. Constraints: `{"maxItems": 1500}`. |

## `ApplicationMetricsResponse`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMetricsResponse`

Time-series resource metrics for a Hyperlift application.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `metrics` | `list<\CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMetricSeries>` | yes | One series per requested metric, in request order. Constraints: `{"maxItems": 20}`. |

## `ApplicationMutationResponse`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMutationResponse`

Result of a Hyperlift application mutation, carrying the identifier of the affected application.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `id` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationId` | yes | Unique identifier of the affected application. |

## `ApplicationStatus`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Enum\ApplicationStatus`

Current lifecycle status of a Hyperlift application. This set may gain values over time.

Allowed values: `creating`, `instart`, `running`, `instop`, `stopped`, `deleting`, `failure`, `restarting`, `created`, `deploying`, `resetting`.

## `AsyncOperationData`

`CommunitySDKs\Spaceship\DTO\AsyncOperations\Schema\AsyncOperationData`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `status` | `CommunitySDKs\Spaceship\DTO\AsyncOperations\Enum\AsyncOperationStatus` | yes | The status of the async operation. |
| `type` | `string` | yes |  Constraints: `{"minLength": 1, "maxLength": 255, "pattern": "\\w+"}`. |
| `details` | `CommunitySDKs\Spaceship\DTO\AsyncOperations\Schema\AsyncOperationDetails or null` | no | Any detail attached to the async operation resource. |
| `createdAt` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate` | yes | The time the async operation was created. |
| `modifiedAt` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate or null` | no | The time the async operation was last modified. |

## `AsyncOperationDetails`

`CommunitySDKs\Spaceship\DTO\AsyncOperations\Schema\AsyncOperationDetails`

Async operation details

Collection data is available through the `items` property. Only schemas with no defined fields expose arbitrary JSON values.

## `AsyncOperationStatus`

`CommunitySDKs\Spaceship\DTO\AsyncOperations\Enum\AsyncOperationStatus`



Allowed values: `pending`, `failed`, `success`.

## `AttributeDetails`

`CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\AttributeDetails`

Attribute details

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"minLength": 2, "maxLength": 32, "pattern": "\\w+"}`. |

## `AttributesContactsAttributesResponse`

`CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\AttributesContactsAttributesResponse`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `contactId` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId` | yes |  |

## `BuildStatus`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Enum\BuildStatus`

Current build status of a Hyperlift application. This set may gain values over time.

Allowed values: `building`, `failed`, `built`, `none`.

## `CNameResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\CNameResourceRecord`

Used to map an alias or subdomain to its canonical (true) domain name

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["CNAME"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `cname` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Canonical (true) domain name that is used to resolve resource records |

## `CNameResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\CNameResourceRecordCreateOrUpdateItem`

Used to map an alias or subdomain to its canonical (true) domain name

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["CNAME"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `cname` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Canonical (true) domain name that is used to resolve resource records |

## `CNameResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\CNameResourceRecordDeleteItem`

Used to map an alias or subdomain to its canonical (true) domain name

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["CNAME"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `cname` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Canonical (true) domain name that is used to resolve resource records |

## `CaAttributeDetails`

`CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\CaAttributeDetails`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["ca"]}`. |
| `agreementValue` | `bool` | yes | When you register a domain, you agree to follow the rules set out by the registry. This agreement applies to all registrations associated with your contact information. |
| `language` | `string` | yes | Language code in corresponding format. Constraints: `{"enum": ["EN", "FR"]}`. |
| `registrantCiraCategory` | `CommunitySDKs\Spaceship\DTO\ContactsAttributes\Enum\CaCiraCategory` | yes | Cira category for registrant contact |

## `CaCiraCategory`

`CommunitySDKs\Spaceship\DTO\ContactsAttributes\Enum\CaCiraCategory`



Allowed values: `CCO`, `CCT`, `RES`, `GOV`, `EDU`, `ASS`, `HOP`, `PRT`, `TDM`, `TRD`, `PLT`, `LAM`, `TRS`, `ABO`, `INB`, `LGR`, `OMK`, `MAJ`.

## `CaaResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\CaaResourceRecord`

Allows domain owners to specify which Certificate Authorities (CAs) are authorized to issue SSL/TLS certificates for their domain

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["CAA"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `flag` | `float` | yes | 0   - no flags are set; 128 - indicates that the “critical bit” is set, and that CAs should halt and not issue a certificate if they don’t recognize the contents of the tag field Constraints: `{"enum": [0, 128]}`. |
| `tag` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Enum\CaaTag` | yes | Indicates specific actions or restrictions related to certificate issuance |
| `value` | `string` | yes | Contains at most one CA identifier and optional semicolon-separated parameters Constraints: `{"maxLength": 256, "pattern": "^[ -~]+$"}`. |

## `CaaResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\CaaResourceRecordCreateOrUpdateItem`

Allows domain owners to specify which Certificate Authorities (CAs) are authorized to issue SSL/TLS certificates for their domain

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["CAA"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `flag` | `float` | yes | 0   - no flags are set; 128 - indicates that the “critical bit” is set, and that CAs should halt and not issue a certificate if they don’t recognize the contents of the tag field Constraints: `{"enum": [0, 128]}`. |
| `tag` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Enum\CaaTag` | yes | Indicates specific actions or restrictions related to certificate issuance |
| `value` | `string` | yes | Contains at most one CA identifier and optional semicolon-separated parameters Constraints: `{"maxLength": 256, "pattern": "^[ -~]+$"}`. |

## `CaaResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\CaaResourceRecordDeleteItem`

Allows domain owners to specify which Certificate Authorities (CAs) are authorized to issue SSL/TLS certificates for their domain

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["CAA"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `flag` | `float` | yes | 0   - no flags are set; 128 - indicates that the “critical bit” is set, and that CAs should halt and not issue a certificate if they don’t recognize the contents of the tag field Constraints: `{"enum": [0, 128]}`. |
| `tag` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Enum\CaaTag` | yes | Indicates specific actions or restrictions related to certificate issuance |
| `value` | `string` | yes | Contains at most one CA identifier and optional semicolon-separated parameters Constraints: `{"maxLength": 256, "pattern": "^[ -~]+$"}`. |

## `CaaTag`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Enum\CaaTag`



Allowed values: `issue`, `issuewild`, `iodef`.

## `CheckoutLinkType`

`CommunitySDKs\Spaceship\DTO\SellerHub\Enum\CheckoutLinkType`

Specifies the type of checkout link to be created. Each type determines a different purchase flow that buyers will experience when accessing the link.

Available types:
- **buyNow**: Direct purchase at a fixed price without negotiation
- **leaseToOwn**: Installment-based purchase plan (coming soon)
- **makeOffer**: Negotiation-based purchase where buyers submit offers (coming soon)

Allowed values: `buyNow`.

## `ContactDetails`

`CommunitySDKs\Spaceship\DTO\Contacts\Schema\ContactDetails`

Contact details

| Field | PHP type | Required | Description |
|---|---|---|---|
| `firstName` | `string` | yes | Contact's first name Constraints: `{"minLength": 1, "maxLength": 125, "pattern": "^['A-Za-z-][\\s'A-Z`a-z-]+['A-Za-z-]$\|^['A-Za-z-]{0,2}$"}`. |
| `lastName` | `string` | yes | Contact's last name Constraints: `{"minLength": 1, "maxLength": 125, "pattern": "^['A-Za-z-][\\s'A-Z`a-z-]+['A-Za-z-]$\|^['A-Za-z-]{0,2}$"}`. |
| `organization` | `string or null` | no | Organization/Company name Constraints: `{"maxLength": 255, "pattern": "^(?!\\s)[\\u0000-\\u007F]{2,}(?!\\s)[\\u0000-\\u007F]$\|^((?!\\s)[\\u0000-\\u007F])*$"}`. |
| `email` | `string` | yes | Email Constraints: `{"minLength": 3, "maxLength": 255}`. |
| `address1` | `string` | yes | Address (line 1) Constraints: `{"maxLength": 255, "pattern": "^[\\d#&'()./:;A-Za-z\\s-,\\\\]+$"}`. |
| `address2` | `string or null` | no | Address (line 2) Constraints: `{"maxLength": 255, "pattern": "^[\\d#&'()./:;A-Za-z\\s-,\\\\]+$"}`. |
| `city` | `string` | yes | City Constraints: `{"maxLength": 255, "pattern": "^['.A-Za-z-][\\s'.A-Za-z-]+['.A-Za-z-]$\|^['.A-Za-z-]{0,2}$"}`. |
| `country` | `CommunitySDKs\Spaceship\DTO\Contacts\Schema\CountryCode` | yes |  |
| `stateProvince` | `string or null` | no | State province name Constraints: `{"maxLength": 255, "pattern": "^['A-Za-z-][\\s'A-Z`a-z-]+['A-Za-z-]$\|^['A-Za-z-]{0,2}$"}`. |
| `postalCode` | `string or null` | no | Postal code Constraints: `{"maxLength": 16, "pattern": "^[\\dA-Za-z-][\\d\\sA-Za-z-]+[\\dA-Za-z-]$\|^[\\dA-Za-z-]{0,2}$"}`. |
| `phone` | `CommunitySDKs\Spaceship\DTO\Contacts\Schema\Phone` | yes |  |
| `phoneExt` | `CommunitySDKs\Spaceship\DTO\Contacts\Schema\PhoneExt or null` | no | Phone number extension |
| `fax` | `CommunitySDKs\Spaceship\DTO\Contacts\Schema\Phone or null` | no | Fax number |
| `faxExt` | `CommunitySDKs\Spaceship\DTO\Contacts\Schema\PhoneExt or null` | no | Fax number extension |
| `taxNumber` | `string or null` | no | Tax number Constraints: `{"maxLength": 255, "pattern": "^[\\d./A-Za-z-][\\d\\s./A-Za-z-]+[\\d./A-Za-z-]$\|^[\\d./A-Za-z-]{0,2}$"}`. |

## `ContactsSaveResponse`

`CommunitySDKs\Spaceship\DTO\Contacts\Schema\ContactsSaveResponse`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `contactId` | `string` | yes | Response with contactId generated, if contact was created, or existing contact's one. Constraints: `{"minLength": 27, "maxLength": 32, "pattern": "[a-zA-Z0-9]+"}`. |

## `CreateCheckoutLinkRequest`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateCheckoutLinkRequest`

Request payload for creating a checkout link. A checkout link allows potential buyers to purchase a domain listed in SellerHub through a direct URL.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `CommunitySDKs\Spaceship\DTO\SellerHub\Enum\CheckoutLinkType` | yes | Specifies the checkout flow type. Currently supports 'BuyNow' for immediate purchase at the specified price. |
| `basePrice` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price or null` | no | The price at which the domain will be offered in the checkout link. This is the amount the buyer will pay to purchase the domain. If not provided, the domain's Buy It Now price will be used. |
| `domainName` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName` | yes | The domain name to create a checkout link for. Must be a domain currently listed in SellerHub. |
| `feePercentageShare` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\FeePercentageShare or null` | no | Commission split configuration. Determines how the platform commission is divided between seller and buyer. If omitted, defaults to 100% seller / 0% buyer. |

## `CreateCheckoutLinkResponse`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateCheckoutLinkResponse`

Response containing the newly created checkout link details. The checkout link can be shared with potential buyers for direct domain purchase.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `url` | `string` | yes | The full URL of the checkout link. Share this URL with potential buyers to allow them to purchase the domain directly. Constraints: `{"maxLength": 2048}`. |
| `validTill` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate or null` | no | The expiration date and time of the checkout link in ISO-8601 format. After this time, the link will no longer be valid for purchases. If not provided, the link does not have an expiration date. |

## `CreateSafePayTransactionRequest`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateSafePayTransactionRequest`

Request payload for opening a SafePay (escrow) transaction for a domain sale.

`initiatedBy` sets who opens the transaction and how the counterparties are identified:

- **`seller`** — the caller is the seller. Optionally identify the buyer with `buyerEmail` (an unregistered email is invited). No seller identifier is needed.
- **`buyer`** — the caller is the buyer. `sellerEmail` is **required** (an unregistered email is invited, otherwise resolved to the existing seller). `buyerEmail` is optional and only overrides the email recorded for the buyer. `paymentMethod` is **required** — the buyer commits to it upfront and does not run a later confirmation step.
- **`broker`** — the caller is the broker acting for both parties. Identify the seller with **exactly one** of `sellerEmail` / `sellerUsername` (required) and, optionally, the buyer with **at most one** of `buyerEmail` / `buyerUsername`. Broker identifiers must resolve to **existing** platform accounts. `confirmedBy` may pre-confirm either party and is honoured only here. When it pre-confirms the buyer (`confirmedBy.buyer=true`), `paymentMethod` is **required** — the buyer never runs the confirmation step that would otherwise capture it.

`sellerUsername` / `buyerUsername` are used only in the broker flow (general users are identified by email); they are ignored in the seller- and buyer-initiated flows. Providing **both** an email and a username for the same party returns `400 Bad Request` for the buyer in every flow and for the seller in the broker flow.

`basePrice` is always required: for `buyNow` it is the single payment; for `leaseToOwn` it is the total lease price the plan is derived from. When `type=leaseToOwn`, also provide `ltoSettings` (`downPaymentPercentage` + `installmentPeriods`) — the down payment, installment amount, and final split are computed from `basePrice` and these two values.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `domainName` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName` | yes | The domain name to open the SafePay transaction for. Must be a domain currently listed in SellerHub. |
| `initiatedBy` | `CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayInitiatedBy` | yes | Which party opens the transaction. |
| `basePrice` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price` | yes | The price the buyer pays. For `buyNow` the single payment; for `leaseToOwn` the total lease price the installment plan is derived from. Required for both types. Every resulting payment must be at least 100 (in the given currency): for `buyNow` that is `basePrice` itself; for `leaseToOwn` see `ltoSettings`. A lower value is rejected with `400 Bad Request`. |
| `type` | `CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayTransactionType` | yes | Specifies the checkout flow type: `buyNow` for immediate purchase, or `leaseToOwn` for an installment plan derived from `basePrice` and `ltoSettings`. |
| `ltoSettings` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayLtoSettings or null` | no | Lease-to-Own plan terms (`downPaymentPercentage` + `installmentPeriods`). Required when `type=leaseToOwn` (a `leaseToOwn` request without it returns `400 Bad Request`); omit for `buyNow`, where any value supplied is ignored. The full schedule is derived server-side from `basePrice` and these values. Each derived payment must be at least 100 (in the given currency) — i.e. both the down payment (`basePrice * downPaymentPercentage / 100`, when non-zero) and each installment (`(basePrice - downPayment) / installmentPeriods`); choose `downPaymentPercentage` and `installmentPeriods` accordingly or the request is rejected with `400 Bad Request`. |
| `feePercentageShare` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\FeePercentageShare` | yes | Commission split configuration. Determines how the platform commission is divided between seller and buyer. |
| `buyerEmail` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email or null` | no | Buyer's email. Broker and seller-initiated flows: identifies or invites the buyer. Buyer-initiated flow: optional — the buyer is the authenticated caller, so this only overrides the email recorded for them. |
| `buyerUsername` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Username or null` | no | Buyer's platform username. Used only in the broker flow to identify the buyer (general users are identified by email); resolved to an existing buyer account — a username that matches no account is rejected. |
| `sellerEmail` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email or null` | no | Seller's email. Required when `initiatedBy=buyer` (an unregistered email is invited, otherwise resolved to the existing seller). In the broker flow, one of `sellerEmail`/`sellerUsername` is required and must resolve to an existing account. Ignored in the seller-initiated flow (the caller is the seller). |
| `sellerUsername` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Username or null` | no | Seller's platform username. Used only in the broker flow to identify the seller (general users are identified by email); resolved to an existing seller account — a username that matches no account is rejected. |
| `confirmedBy` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayConfirmedBy or null` | no | Broker flow only: pre-confirm the seller and/or buyer at creation, skipping their confirmation step. Ignored for seller- and buyer-initiated transactions. |
| `paymentMethod` | `CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayPaymentMethod or null` | no | Payment method the buyer commits to. **Required** when the buyer commits upfront without a later confirmation step — i.e. when `initiatedBy=buyer`, or when a broker pre-confirms the buyer (`confirmedBy.buyer=true`); omitting it then returns `400 Bad Request`. Must be omitted otherwise (the buyer selects it during their own confirmation). |

## `CreateSellerHubDomainRequest`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\CreateSellerHubDomainRequest`

Create SellerHub domain request

| Field | PHP type | Required | Description |
|---|---|---|---|
| `description` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DomainDescription or null` | no | Domain description |
| `displayName` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DisplayName or null` | no | Display name for the domain |
| `binPriceEnabled` | `bool or null` | no | Enable or disable the Buy It Now (BIN) option |
| `binPrice` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price or null` | no | Buy It Now (BIN) price for the domain |
| `minPriceEnabled` | `bool or null` | no | Enable or disable offer negotiation with minimum price |
| `minPrice` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price or null` | no | Minimum offer price for the domain |
| `name` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName` | yes | Domain name in Unicode format |

## `Currency`

`CommunitySDKs\Spaceship\DTO\Common\Schema\Currency`

Currency code following ISO 4217 standard. Currently only USD is supported.


## `DomainAvailabilityResult`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainAvailabilityResult`

Domain availability check result

| Field | PHP type | Required | Description |
|---|---|---|---|
| `domain` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainName` | yes |  |
| `result` | `CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainAvailabilityStatus` | yes |  |
| `premiumPricing` | `list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPriceDetails>` | yes |  |

## `DomainAvailabilityStatus`

`CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainAvailabilityStatus`

Domain availability status. Possible values include:
* `available` - The domain is available for registration.
* `taken` - Domain is already taken and available for transfer.
* `invalidDomainName` - Domain name is invalid.
* `tldNotSupported` - Specified TLD is not supported.
* `unexpectedError` - An error occurred while checking domain availability. The system was unable to determine the domain's status due to a technical issue.

Allowed values: `available`, `taken`, `invalidDomainName`, `tldNotSupported`, `unexpectedError`.

## `DomainClientEPPStatus`

`CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainClientEPPStatus`



Allowed values: `clientDeleteProhibited`, `clientHold`, `clientRenewProhibited`, `clientTransferProhibited`, `clientUpdateProhibited`.

## `DomainContacts`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainContacts`

Domain Contacts presented as ID references

| Field | PHP type | Required | Description |
|---|---|---|---|
| `registrant` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId` | yes | ID of the registrant contact person |
| `admin` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId or null` | no | ID of the admin contact person |
| `tech` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId or null` | no | ID of the technical contact person |
| `billing` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId or null` | no | ID of the billing contact person |
| `attributes` | `list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId> or null` | no | List of extended attribute contact point IDs Constraints: `{"maxItems": 5}`. |

## `DomainCreateRequest`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainCreateRequest`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `autoRenew` | `bool` | yes | Specifies whether automatic renewal will be enabled for the domain after the registration. After that, if autoRenew is set to true, the domain will be automatically renewed using the account’s default payment method upon each expiration |
| `years` | `int` | yes | Number of years to register the domain Constraints: `{"minimum": 1, "maximum": 10}`. |
| `privacyProtection` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPrivacyOptions` | yes |  |
| `contacts` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainContacts` | yes | Domain contacts are specified using contact IDs. These contact IDs can be obtained from the “Get domain info” endpoint (/domains) for an existing domain, or by creating new contacts through the “Save contact details” endpoint (/contacts). Each contact ID corresponds to a specific contact person and includes their details (such as name, address, and email). These contacts will be associated with the domain during registration. |

## `DomainInfo`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainInfo`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `name` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameALabel` | yes |  |
| `unicodeName` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameULabel` | yes |  |
| `isPremium` | `bool` | yes | Indicates whether the domain is premium |
| `autoRenew` | `bool` | yes | Indicates whether the auto-renew option is enabled |
| `registrationDate` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate` | yes | The date when the domain was registered |
| `expirationDate` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate` | yes | The date when the domain registration expires |
| `lifecycleStatus` | `CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainLifecycleStatus` | yes | Current lifecycle status of the domain. Possible values are:  * `creating` - The domain is being registered. This status means that the request has not yet been processed by the registry. * `registered` - The domain is registered. * `grace1` - The domain has expired but is still fully manageable. * `grace2` - The domain expired, parked, and its management is limited. * `redemption` - The domain has expired and may not be recoverable. If restoration is possible, an additional fee may apply. |
| `verificationStatus` | `CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainVerificationStatus or null` | yes | Status of the RAA verification process. `null` if RAA procedure is not applied for the domain. |
| `eppStatuses` | `list<\CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainClientEPPStatus>` | yes |  |
| `suspensions` | `list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainSuspensionDetails>` | yes | Information about domain suspensions. The array may be empty, contain details about one suspension, or contain details about two: one `raaVerification` and one of the other reason codes.  Possible reason codes are:  * `raaVerification` - The domain is suspended due to unverified contacts. * `abuse` - The domain is suspended to prevent or mitigate abusive activity. * `promoAbuse` - The domain is suspended for violation of promotion terms. * `fraud` - The domain is suspended due to unverified payment activity. * `pendingAccountVerification` - The domain is locked due to pending account verification. * `unauthorizedAccess` - The domain is locked due to the unauthorized access report. * `tosViolation` - The domain is suspended for TOS violation. * `transferDispute` - The domain is locked due to an ongoing transfer dispute. * `restrictedSecurity` - The domain is suspended to prevent or mitigate abusive activity. * `lockCourt` - The domain is locked due to the legal proceeding. * `suspendCourt` - The domain is suspended due to the legal proceeding. * `udrpUrs` - The domain is locked due to UDRP/URS proceeding. * `restrictedLegal` - The domain is locked to prevent or mitigate abusive activity. * `paymentPending` - The domain is locked due to a payment issue. * `unpaidService` - The domain is suspended due to an unresolved payment issue. * `restrictedWhois` - The domain is suspended due to violation of our Domain Registration Agreement. * `lockedWhois` - The domain is locked due to violation of our Domain Registration Agreement. * `complianceCase` - The domain is locked due to an ongoing case with the Compliance Team. * `suspendRegistry` - The domain is suspended by the Registry. * `fefAbuse` - The domain is locked for violation of Email Forwarding Services according to TOS. * `ddosSuspend` - The domain is suspended to mitigate a DDoS attack. Constraints: `{"maxItems": 2}`. |
| `privacyProtection` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPrivacyProtection` | yes | Information about domain privacy protection |
| `nameservers` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameServersConfigurationResponse` | yes | Information about nameservers |
| `contacts` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainContacts` | yes |  |

## `DomainLifecycleStatus`

`CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainLifecycleStatus`



Allowed values: `creating`, `registered`, `grace1`, `grace2`, `redemption`.

## `DomainNameServersConfigurationRequest`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameServersConfigurationRequest`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `provider` | `CommunitySDKs\Spaceship\DTO\Domains\Enum\Provider` | yes | Nameservers provider |
| `hosts` | `list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\Fqdn> or null` | no | A list of nameservers to be assigned to the domain. Each nameserver must be provided in a fully qualified domain format. This field must be specified only for the "custom" provider; for the "basic" provider it should be omitted. Constraints: `{"minItems": 2, "maxItems": 12}`. |

## `DomainNameServersConfigurationResponse`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameServersConfigurationResponse`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `provider` | `CommunitySDKs\Spaceship\DTO\Domains\Enum\Provider` | yes | Nameservers provider |
| `hosts` | `list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\Fqdn>` | yes | A list of nameservers assigned to the domain. Each nameserver is provided in a fully qualified domain format. Constraints: `{"minItems": 2, "maxItems": 12}`. |

## `DomainPriceDetails`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPriceDetails`

Domain premium prices

| Field | PHP type | Required | Description |
|---|---|---|---|
| `operation` | `string` | yes | Operation to which a premium price is applied Constraints: `{"enum": ["register", "transfer", "renew", "restore"]}`. |
| `price` | `float` | yes | Premium price amount |
| `currency` | `CommunitySDKs\Spaceship\DTO\Common\Schema\Currency` | yes | Premium price currency |

## `DomainPrivacyLevel`

`CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel`



Allowed values: `public`, `high`.

## `DomainPrivacyOptions`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPrivacyOptions`

Privacy protection options. This parameter controls the visibility of your domain registrant contact information in the public WHOIS database.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `level` | `CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel` | yes | Indicates the level of privacy protection. Set this property to "high" to enable privacy protection and hide your personal details, or to "public" to display your real contact information. When choosing the "public" level, the "userConsent" property must be set to true to confirm your explicit consent for making your contact information publicly available.  Note: not all TLDs support "high" privacy protection level |
| `userConsent` | `bool` | yes | Indicates whether the user consents to the Public privacy settings |

## `DomainPrivacyProtection`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPrivacyProtection`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `contactForm` | `bool` | yes | Indicates whether WHOIS should display the contact form link |
| `level` | `CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel` | yes | Level of privacy protection set for the domain |

## `DomainSuspensionDetails`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainSuspensionDetails`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `reasonCode` | `string` | yes | Suspension reason code Constraints: `{"enum": ["raaVerification", "abuse", "promoAbuse", "fraud", "pendingAccountVerification", "unauthorizedAccess", "tosViolation", "transferDispute", "restrictedSecurity", "lockCourt", "suspendCourt", "udrpUrs", "restrictedLegal", "paymentPending", "unpaidService", "restrictedWhois", "lockedWhois", "complianceCase", "suspendRegistry", "fefAbuse", "ddosSuspend"]}`. |

## `DomainTransferRequest`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainTransferRequest`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `autoRenew` | `bool` | yes | Specifies whether automatic renewal will be enabled for the domain after the transfer is completed. After that, if autoRenew is set to true, the domain will be automatically renewed using the account’s default payment method upon each expiration |
| `privacyProtection` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainPrivacyOptions` | yes |  |
| `contacts` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainContacts` | yes | Domain contacts are specified using contact IDs. These contact IDs can be obtained from the “Get domain info” endpoint (/domains) for an existing domain, or by creating new contacts through the “Save contact details” endpoint (/contacts). Each contact ID corresponds to a specific contact person and includes their details (such as name, address, and email). These contacts will be associated with the domain after transfer. |
| `authCode` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\AuthCode or null` | no | Authorization code (EPP code) required for domain transfers. This code is mandatory for most TLDs but may be optional for certain ccTLDs, for example, the .uk. |

## `DomainTransferStatus`

`CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainTransferStatus`

Status of the domain name transfer. Possible values are:
* `pending` - transfer is ongoing
* `completed` - transfer was completed
* `cancelled` - transfer request was cancelled by loosing party

Allowed values: `pending`, `completed`, `cancelled`.

## `DomainValidVerificationStatus`

`CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainValidVerificationStatus`

Status of the RAA verification process. Possible values are:
* `verification` - Verification process is in progress and requires user interaction.
* `success` - Verification success.

Allowed values: `verification`, `success`.

## `DomainVerificationStatus`

`CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainVerificationStatus`

Status of the RAA verification process. Possible values are:
* `verification` - Verification process is in progress and requires user interaction.
* `success` - Verification success.
* `failed` - Verification failed.

Allowed values: `verification`, `success`, `failed`.

## `DomainsDomainAuthCodeResponse`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainAuthCodeResponse`

Represents wrapper object for auth code response

| Field | PHP type | Required | Description |
|---|---|---|---|
| `authCode` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\AuthCode` | yes |  |
| `expires` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate` | yes | The expiration date for the auth code |

## `DomainsDomainAutoRenewal`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainAutoRenewal`

Represents wrapper object for autorenewal state

| Field | PHP type | Required | Description |
|---|---|---|---|
| `isEnabled` | `bool` | yes | Describes autorenewal state for the domain |

## `DomainsDomainEmailProtectionPreference`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainEmailProtectionPreference`

Represents a wrapper object for domain's email protection preference

| Field | PHP type | Required | Description |
|---|---|---|---|
| `contactForm` | `bool` | yes | Indicates whether WHOIS should display the contact form link |

## `DomainsDomainPrivacyPreference`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainPrivacyPreference`

Represents a wrapper object for domain's privacy level preference

| Field | PHP type | Required | Description |
|---|---|---|---|
| `privacyLevel` | `CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainPrivacyLevel` | yes | Describes privacy preference for the domain |
| `userConsent` | `bool` | yes | Expresses the user's consent for privacy changes. The operation will be performed ONLY if the flag is 'true'. |

## `DomainsDomainRenewalRequestInfo`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainRenewalRequestInfo`

Parameters required to request a domain renewal

| Field | PHP type | Required | Description |
|---|---|---|---|
| `years` | `int` | yes | Renewal years Constraints: `{"minimum": 1, "maximum": 10}`. |
| `currentExpirationDate` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate` | yes | Current expiration date |

## `DomainsDomainTransferDetailsResponse`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainTransferDetailsResponse`

Details of the domain name transfer

| Field | PHP type | Required | Description |
|---|---|---|---|
| `startedAt` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate` | yes | Date when transfer was initiated |
| `finishedAt` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate or null` | no | Date when transfer was finished |
| `direction` | `string` | yes | Transfer direction: incoming Constraints: `{"enum": ["in"]}`. |
| `status` | `CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainTransferStatus` | yes |  |

## `DomainsDomainTransferLock`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsDomainTransferLock`

Represents wrapper object for transfer lock

| Field | PHP type | Required | Description |
|---|---|---|---|
| `isLocked` | `bool` | yes | Describes transfer lock for the domain |

## `DomainsGetDomainListQueryParams`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsGetDomainListQueryParams`

Domains list query params

| Field | PHP type | Required | Description |
|---|---|---|---|
| `take` | `int` | yes | Number of response items per page Constraints: `{"minimum": 1, "maximum": 100}`. |
| `skip` | `int` | yes | Number of response items to skip Constraints: `{"minimum": 0, "maximum": 2147483647}`. |
| `orderBy` | `list<string> or null` | no | Specifies fields and order to sort the response items Constraints: `{"maxItems": 1}`. |

## `DomainsGetDomainsAvailabilityRequest`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsGetDomainsAvailabilityRequest`

Domains availability check request

| Field | PHP type | Required | Description |
|---|---|---|---|
| `domains` | `list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainName>` | yes | List of domain names in ASCII format (A-label) whose details are to be fetched. The domain name must be provided in a fully qualified domain format. Constraints: `{"minItems": 1, "maxItems": 20}`. |

## `DomainsGetDomainsAvailabilityResult`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsGetDomainsAvailabilityResult`

Domains availability check result

| Field | PHP type | Required | Description |
|---|---|---|---|
| `domains` | `list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainAvailabilityResult>` | yes |  |

## `DomainsPutContactsResponse`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainsPutContactsResponse`

Contacts updated successfully. Optionally contacts verification may be required.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `verificationStatus` | `CommunitySDKs\Spaceship\DTO\Domains\Enum\DomainValidVerificationStatus or null` | yes | Status of the RAA verification process. `null` if RAA procedure is not applied for the domain. |

## `EnvironmentVariableItems`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariableItems`

Map of environment variable names to their values. At most 20 variables per application.
A name may contain ASCII letters, digits, underscores, dashes and spaces, must not start
with a digit, and is limited to 128 characters; other names are rejected. Names are
normalized on write: upper-cased, with dashes and spaces becoming underscores (`db-user`
is stored and returned as `DB_USER`).
`APPLICATION_PORT` (default `8080`) is the port Hyperlift connects to the application on;
set it to an empty value to not expose the application.

Collection data is available through the `items` property. Only schemas with no defined fields expose arbitrary JSON values.

## `EnvironmentVariables`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariables`

Environment variables for a Hyperlift application, expressed as a map of variable name to value
under the `items` property.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `items` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariableItems` | yes | Map of environment variable names to their values, for example `{ "NODE_ENV": "production", "APPLICATION_PORT": "8080" }`. At most 20 variables; names are normalized on write (upper-cased, dashes and spaces become underscores). |

## `EnvironmentVariablesResponse`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariablesResponse`

Environment variables for a Hyperlift application together with the application identifier.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `id` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationId` | yes | Unique identifier of the application. |
| `items` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariableItems` | yes | Map of environment variable names to their values, for example `{ "NODE_ENV": "production", "APPLICATION_PORT": "8080" }`. At most 20 variables; names are normalized on write (upper-cased, dashes and spaces become underscores). |

## `ErrorDetail`

`CommunitySDKs\Spaceship\DTO\Common\Schema\ErrorDetail`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `detail` | `string` | yes | A general message about the exception Constraints: `{"pattern": "^[\\s\|\\S]*$"}`. |

## `ExternalApplicationResponse`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ExternalApplicationResponse`

A Hyperlift application as exposed through the external API, with its deployment, build and source configuration.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `id` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationId` | yes | Unique identifier of the application. |
| `status` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Enum\ApplicationStatus` | yes | Current lifecycle status of the application. |
| `buildStatus` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Enum\BuildStatus` | yes | Current build status of the application. |
| `plan` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationPlan` | yes | Identifier of the plan the application runs on. |
| `domain` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationDomain or null` | yes | Custom domain bound to the application, if any. |
| `scale` | `int or null` | yes | Desired scale of the application: 0 when stopped, 1 when running. Null while the desired scale is not yet known (e.g. during initial provisioning). Constraints: `{"minimum": 0, "maximum": 1}`. |
| `branch` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GitBranch or null` | yes | Source branch deployed for the application. |
| `githubInstallationId` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GithubInstallationId or null` | yes | Identifier of the connected GitHub App installation. |
| `githubRepositoryFullName` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GithubRepositoryFullName or null` | yes | Full name (owner/repository) of the connected GitHub repository. |
| `dockerfilePath` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\DockerfilePath or null` | yes | Path to the Dockerfile used to build the application. |
| `automaticBuildEnabled` | `bool or null` | yes | Whether a new build is triggered automatically on each push to the connected branch. |
| `createdAt` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate` | yes | Timestamp when the application was created. |
| `updatedAt` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate or null` | yes | Timestamp when the application was last updated. |

## `FeePercentage`

`CommunitySDKs\Spaceship\DTO\SellerHub\Enum\FeePercentage`

Allowed values for commission percentage split: 0, 25, 50, 75, or 100.

Allowed values: `0`, `25`, `50`, `75`, `100`.

## `FeePercentageShare`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\FeePercentageShare`

Commission split between seller and buyer. Determines how the platform commission is distributed. The seller and buyer percentages must sum to 100.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `seller` | `CommunitySDKs\Spaceship\DTO\SellerHub\Enum\FeePercentage` | yes | Percentage of the platform commission paid by the seller. Allowed values: 0, 25, 50, 75, 100. |
| `buyer` | `CommunitySDKs\Spaceship\DTO\SellerHub\Enum\FeePercentage` | yes | Percentage of the platform commission paid by the buyer. Allowed values: 0, 25, 50, 75, 100. |

## `ForbiddenError`

`CommunitySDKs\Spaceship\DTO\Common\Schema\ForbiddenError`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `detail` | `string` | yes | A general message about the exception Constraints: `{"pattern": "^[\\s\|\\S]*$"}`. |

## `HostNameServers`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\HostNameServers`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `ips` | `list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\IpAddress>` | yes |  Constraints: `{"maxItems": 255}`. |

## `HttpsResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\HttpsResourceRecord`

Used to deliver configuration information and parameters for how to access a service via HTTPS.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["HTTPS"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `port` | `array or null` | no | Specifies the port number for which the HTTPS record is applicable. If specified, it must be a single wildcard (an asterisk symbol) or a string that starts with an underscore and continues with a number from 1 to 65535. |
| `scheme` | `string or null` | no | Specifies the scheme over which the HTTPS record applies. It is optional if the port is not specified, otherwise it is required and must be "_https" Constraints: `{"enum": ["_https"]}`. |
| `svcPriority` | `int` | yes | The priority of this record (relative to others, with lower values preferred). A value of 0 indicates AliasMode and other values indicate ServiceMode. Constraints: `{"minimum": 0, "maximum": 65535}`. |
| `targetName` | `array` | yes | A fully qualified domain name (FQDN) or a single ".", either the alias target (for AliasMode) or the alternative endpoint (for ServiceMode). For AliasMode, a TargetName of "." indicates that the service is not available or does not exist. For ServiceMode, if TargetName has the value ".", then the owner name of this record is used as the effective TargetName. Constraints: `{"maxLength": 253}`. |
| `svcParams` | `string` | yes | A whitespace-separated list with parameters describing the alternative endpoint at TargetName (only used in ServiceMode and otherwise ignored). Each SvcParam consisting of a SvcParamKey=SvcParamValue pair or a standalone SvcParamKey.  Initial keys: "mandatory", "alpn", "no-default-alpn", "port", "ipv4hint", "ech", "ipv6hint", "dohpath", "ohttp", "tls-supported-groups".  Arbitrary keys can be represented using the unknown-key presentation format "keyNNNNN" where NNNNN is the numeric value of the key type without leading zeros (Number 0-65535). Constraints: `{"minLength": 0, "maxLength": 65535, "pattern": ".*"}`. |

## `HttpsResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\HttpsResourceRecordCreateOrUpdateItem`

Used to deliver configuration information and parameters for how to access a service via HTTPS.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["HTTPS"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `port` | `array or null` | no | Specifies the port number for which the HTTPS record is applicable. If specified, it must be a single wildcard (an asterisk symbol) or a string that starts with an underscore and continues with a number from 1 to 65535. |
| `scheme` | `string or null` | no | Specifies the scheme over which the HTTPS record applies. It is optional if the port is not specified, otherwise it is required and must be "_https" Constraints: `{"enum": ["_https"]}`. |
| `svcPriority` | `int` | yes | The priority of this record (relative to others, with lower values preferred). A value of 0 indicates AliasMode and other values indicate ServiceMode. Constraints: `{"minimum": 0, "maximum": 65535}`. |
| `targetName` | `array` | yes | A fully qualified domain name (FQDN) or a single ".", either the alias target (for AliasMode) or the alternative endpoint (for ServiceMode). For AliasMode, a TargetName of "." indicates that the service is not available or does not exist. For ServiceMode, if TargetName has the value ".", then the owner name of this record is used as the effective TargetName. Constraints: `{"maxLength": 253}`. |
| `svcParams` | `string` | yes | A whitespace-separated list with parameters describing the alternative endpoint at TargetName (only used in ServiceMode and otherwise ignored). Each SvcParam consisting of a SvcParamKey=SvcParamValue pair or a standalone SvcParamKey.  Initial keys: "mandatory", "alpn", "no-default-alpn", "port", "ipv4hint", "ech", "ipv6hint", "dohpath", "ohttp", "tls-supported-groups".  Arbitrary keys can be represented using the unknown-key presentation format "keyNNNNN" where NNNNN is the numeric value of the key type without leading zeros (Number 0-65535). Constraints: `{"minLength": 0, "maxLength": 65535, "pattern": ".*"}`. |

## `HttpsResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\HttpsResourceRecordDeleteItem`

Used to deliver configuration information and parameters for how to access a service via HTTPS.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["HTTPS"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `port` | `array or null` | no | Specifies the port number for which the HTTPS record is applicable. If specified, it must be a single wildcard (an asterisk symbol) or a string that starts with an underscore and continues with a number from 1 to 65535. |
| `scheme` | `string or null` | no | Specifies the scheme over which the HTTPS record applies. It is optional if the port is not specified, otherwise it is required and must be "_https" Constraints: `{"enum": ["_https"]}`. |
| `svcPriority` | `int` | yes | The priority of this record (relative to others, with lower values preferred). A value of 0 indicates AliasMode and other values indicate ServiceMode. Constraints: `{"minimum": 0, "maximum": 65535}`. |
| `targetName` | `array` | yes | A fully qualified domain name (FQDN) or a single ".", either the alias target (for AliasMode) or the alternative endpoint (for ServiceMode). For AliasMode, a TargetName of "." indicates that the service is not available or does not exist. For ServiceMode, if TargetName has the value ".", then the owner name of this record is used as the effective TargetName. Constraints: `{"maxLength": 253}`. |
| `svcParams` | `string` | yes | A whitespace-separated list with parameters describing the alternative endpoint at TargetName (only used in ServiceMode and otherwise ignored). Each SvcParam consisting of a SvcParamKey=SvcParamValue pair or a standalone SvcParamKey.  Initial keys: "mandatory", "alpn", "no-default-alpn", "port", "ipv4hint", "ech", "ipv6hint", "dohpath", "ohttp", "tls-supported-groups".  Arbitrary keys can be represented using the unknown-key presentation format "keyNNNNN" where NNNNN is the numeric value of the key type without leading zeros (Number 0-65535). Constraints: `{"minLength": 0, "maxLength": 65535, "pattern": ".*"}`. |

## `HyperliftGetHyperliftApplicationListQueryParams`

`CommunitySDKs\Spaceship\DTO\Common\Schema\HyperliftGetHyperliftApplicationListQueryParams`

Hyperlift application list query params

| Field | PHP type | Required | Description |
|---|---|---|---|
| `take` | `int` | yes | Number of response items per page Constraints: `{"minimum": 1, "maximum": 100}`. |
| `skip` | `int` | yes | Number of response items to skip Constraints: `{"minimum": 0, "maximum": 2147483647}`. |

## `MetricUnit`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Enum\MetricUnit`

Unit a metric's sample values and quota are expressed in. This set may gain values over time.

Allowed values: `bytes`, `percent`, `bytesPerSecond`, `mebibytes`.

## `MxResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\MxResourceRecord`

Specifies the mail servers responsible for receiving email messages on behalf of a domain

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["MX"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `exchange` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Mail server that accepts mail |
| `preference` | `int` | yes | Preference (distance) number of mail server Constraints: `{"minimum": 0, "maximum": 65535}`. |

## `MxResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\MxResourceRecordCreateOrUpdateItem`

Specifies the mail servers responsible for receiving email messages on behalf of a domain

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["MX"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `exchange` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Mail server that accepts mail |
| `preference` | `int` | yes | Preference (distance) number of mail server Constraints: `{"minimum": 0, "maximum": 65535}`. |

## `MxResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\MxResourceRecordDeleteItem`

Specifies the mail servers responsible for receiving email messages on behalf of a domain

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["MX"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `exchange` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Mail server that accepts mail |
| `preference` | `int` | yes | Preference (distance) number of mail server Constraints: `{"minimum": 0, "maximum": 65535}`. |

## `NsResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\NsResourceRecord`

Specifies which name servers are authoritative for a specific domain

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["NS"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `nameserver` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Nameserver name |

## `NsResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\NsResourceRecordCreateOrUpdateItem`

Specifies which name servers are authoritative for a specific domain

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["NS"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `nameserver` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Nameserver name |

## `NsResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\NsResourceRecordDeleteItem`

Specifies which name servers are authoritative for a specific domain

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["NS"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `nameserver` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Nameserver name |

## `ObjectNotFoundError`

`CommunitySDKs\Spaceship\DTO\Common\Schema\ObjectNotFoundError`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `detail` | `string` | yes | A general message about the exception Constraints: `{"pattern": "^[\\s\|\\S]*$"}`. |

## `PersonalNameserverRecord`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\PersonalNameserverRecord`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `host` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\Host` | yes | The host name of the personal nameserver |
| `ips` | `list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\IpAddress>` | yes | List of IP addresses associated with the personal nameserver host Constraints: `{"minItems": 1, "maxItems": 16}`. |

## `PersonalNameservers`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\PersonalNameservers`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `records` | `list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\PersonalNameserverRecord>` | yes | List of hosts and IP addresses associated with the personal nameservers Constraints: `{"minItems": 1, "maxItems": 255}`. |

## `Price`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price`

Money amount with currency

| Field | PHP type | Required | Description |
|---|---|---|---|
| `amount` | `string` | yes | Amount as string to preserve precision Constraints: `{"maxLength": 20, "pattern": "^[0-9]+(\\.[0-9]{1,2})?$"}`. |
| `currency` | `CommunitySDKs\Spaceship\DTO\Common\Schema\Currency` | yes | Currency code (ISO 4217) |

## `PriceUpdate`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\PriceUpdate`

Money amount with currency

| Field | PHP type | Required | Description |
|---|---|---|---|
| `amount` | `string or null` | no | Amount as string to preserve precision Constraints: `{"maxLength": 20, "pattern": "^[0-9]+(\\.[0-9]{1,2})?$"}`. |
| `currency` | `CommunitySDKs\Spaceship\DTO\Common\Schema\Currency or null` | no | Currency code (ISO 4217) |

## `Provider`

`CommunitySDKs\Spaceship\DTO\Domains\Enum\Provider`



Allowed values: `basic`, `custom`.

## `PtrResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\PtrResourceRecord`

Used to map an IP address to its corresponding domain name in a reverse DNS lookup

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["PTR"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `pointer` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | The domain name that corresponds to the given IP address |

## `PtrResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\PtrResourceRecordCreateOrUpdateItem`

Used to map an IP address to its corresponding domain name in a reverse DNS lookup

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["PTR"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `pointer` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | The domain name that corresponds to the given IP address |

## `PtrResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\PtrResourceRecordDeleteItem`

Used to map an IP address to its corresponding domain name in a reverse DNS lookup

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["PTR"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `pointer` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | The domain name that corresponds to the given IP address |

## `RateLimitError`

`CommunitySDKs\Spaceship\DTO\Common\Schema\RateLimitError`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `detail` | `string` | yes | A general message about the exception Constraints: `{"pattern": "^[\\s\|\\S]*$"}`. |

## `RecordsGetResourceRecordsListQueryParams`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\RecordsGetResourceRecordsListQueryParams`

Resource records list query params

| Field | PHP type | Required | Description |
|---|---|---|---|
| `take` | `int` | yes | Number of response items per page Constraints: `{"minimum": 1, "maximum": 500}`. |
| `skip` | `int` | yes | Number of response items to skip Constraints: `{"minimum": 0, "maximum": 2147483647}`. |
| `orderBy` | `list<string> or null` | no | Specifies fields and order to sort the response items Constraints: `{"maxItems": 1}`. |

## `RecordsRecordsUpdateModel`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\RecordsRecordsUpdateModel`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `force` | `bool or null` | no | Turn-off conflicts resolution checker and force zone update |
| `items` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListCreateOrUpdateItem` | yes | Records |

## `ResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecord`

DNS resource record details

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"minLength": 1, "maxLength": 5, "pattern": "\\w+"}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |

## `ResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordCreateOrUpdateItem`

DNS resource record details

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"minLength": 1, "maxLength": 5, "pattern": "\\w+"}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |

## `ResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordDeleteItem`

DNS resource record details

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"minLength": 1, "maxLength": 5, "pattern": "\\w+"}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |

## `ResourceRecordsGroup`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup`

Details of the group record belongs to

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes | * custom: record belongs to custom resource records group * product: record was added as a part of products connection * personalNs: record is associated with the corresponding personal nameserver Constraints: `{"enum": ["custom", "product", "personalNs"]}`. |

## `ResourceRecordsListCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListCreateOrUpdateItem`



Collection data is available through the `items` property. Only schemas with no defined fields expose arbitrary JSON values.

## `ResourceRecordsListDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsListDeleteItem`



Collection data is available through the `items` property. Only schemas with no defined fields expose arbitrary JSON values.

## `SafePayConfirmedBy`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayConfirmedBy`

Per-party confirmation flags.

On **create** (broker flow only): a broker may open a transaction already pre-confirmed by the seller and/or the buyer, skipping the respective confirmation step. Ignored for seller- and buyer-initiated transactions.

On **read**: reflects which parties have confirmed so far.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `seller` | `bool` | yes | Whether the seller has confirmed (or is pre-confirmed at creation). |
| `buyer` | `bool` | yes | Whether the buyer has confirmed (or is pre-confirmed at creation). |

## `SafePayInitiatedBy`

`CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayInitiatedBy`

Which party opened the SafePay transaction. The other party (or parties) must confirm before the deal becomes active.

Allowed values: `seller`, `buyer`, `broker`.

## `SafePayLtoSettings`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayLtoSettings`

Lease-to-Own terms for a `leaseToOwn` transaction: the down payment percentage and the number of installment periods. The total lease price is carried by `basePrice`.

On **create** these two values, together with `basePrice`, define the plan — the down payment amount, per-installment amount, and any remainder are derived server-side. On **read** the same two values are recomputed from the stored plan: both remain whole numbers (never fractional), and `downPaymentPercentage` is rounded to the nearest whole percent of the down-payment amount. A plan created through this API round-trips to the submitted values; a plan created elsewhere with an explicit down-payment amount may report the closest whole percent.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `downPaymentPercentage` | `int` | yes | Down payment as a whole-number percentage of the total lease price (integer only — fractional percentages are rejected). Capped at 99: a Lease-to-Own plan must leave a balance for the installments. A value near the cap leaves little per installment, and since each installment must be at least the platform minimum, an excessive percentage is still rejected on create. On read this is the nearest whole percent derived from the stored down-payment amount. Constraints: `{"minimum": 0, "maximum": 99}`. |
| `installmentPeriods` | `int` | yes | Number of monthly installment periods over which the balance is paid. Constraints: `{"minimum": 1, "maximum": 120}`. |

## `SafePayPaymentMethod`

`CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayPaymentMethod`

Payment method the buyer commits to for a SafePay transaction.

Allowed values: `btcPay`, `wireTransfer`, `creditCard`, `payPal`, `alipay`.

## `SafePaySaleStatus`

`CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePaySaleStatus`

Outcome of the sale once the buyer has paid.

Tracks the post-payment sale, distinct from `status` (the transaction lifecycle). Returned only to a broker caller and absent until a sale is tracked; `saleProcessing` and `leaseActive` are in-progress, the rest are terminal.

Allowed values: `saleProcessing`, `leaseActive`, `sold`, `cancelledPaymentDenied`, `cancelledDomainNotDelivered`, `leaseCancelledNoPayment`, `leaseCancelledByBuyer`.

## `SafePayTransaction`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayTransaction`

A SafePay (escrow) transaction. Returned by create, get, and list.

Party emails are present only when supplied at creation.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `transactionId` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Uuid` | yes | Unique SafePay transaction identifier (UUID). Use it to retrieve the transaction via `GET /v1/sellerhub/safepay-transactions/{transactionId}`. |
| `status` | `CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayTransactionStatus` | yes | Current lifecycle status. |
| `saleStatus` | `CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePaySaleStatus or null` | no | Sale outcome once the buyer has paid — the post-payment sale, distinct from `status`. Returned only to a broker caller and only once a sale is tracked; absent otherwise (including on create). |
| `domainName` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName` | yes | Domain being sold, normalized (lowercase, punycode). |
| `initiatedBy` | `CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayInitiatedBy` | yes | Which party opened the transaction. |
| `basePrice` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price` | yes | Sale price. For `buyNow` the amount the buyer pays; for `leaseToOwn` the total lease price. |
| `type` | `CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayTransactionType` | yes | Sale type. |
| `ltoSettings` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayLtoSettings or null` | no | Lease-to-Own terms; present only when `type` is `leaseToOwn`. Recomputed from the stored plan — see `SafePayLtoSettings` for how `downPaymentPercentage` is rounded to the nearest whole percent on read. |
| `feePercentageShare` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\FeePercentageShare` | yes | Commission split between seller and buyer. |
| `buyerEmail` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email or null` | no | Buyer's email, when supplied at creation. |
| `sellerEmail` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email or null` | no | Seller's email, when supplied at creation. |
| `confirmedBy` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayConfirmedBy` | yes | Live confirmation state — which parties have confirmed so far, whether by explicit action or broker pre-confirmation at creation. |
| `url` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayTransactionUrls` | yes | Role-specific SafePay review URLs. |

## `SafePayTransactionStatus`

`CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayTransactionStatus`

Lifecycle status of a SafePay transaction.

Pre-confirmation states (`pendingSellerConfirm`, `pendingBuyerConfirm`) require counterparty action. `processing` and `verification` are intermediate states after the buyer pays (payment settlement and domain-ownership verification) that resolve to `purchased` or a terminal error state. Terminal states are `purchased`, `deactivated`, and `expired`.

Allowed values: `active`, `pendingSellerConfirm`, `pendingBuyerConfirm`, `processing`, `verification`, `deactivated`, `purchased`, `expired`.

## `SafePayTransactionType`

`CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SafePayTransactionType`

Sale type for the SafePay transaction.

- **buyNow**: single-payment purchase at the agreed `basePrice`.
- **leaseToOwn**: installment-based purchase; `ltoSettings` carries the plan and `basePrice` is the total lease price.

Allowed values: `buyNow`, `leaseToOwn`.

## `SafePayTransactionUrls`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayTransactionUrls`

Role-specific SafePay review URLs for the transaction.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `seller` | `string` | yes | Seller-side SafePay review URL. Constraints: `{"maxLength": 2048}`. |
| `buyer` | `string` | yes | Buyer-side SafePay review URL. Constraints: `{"maxLength": 2048}`. |

## `ScaleApplicationRequest`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ScaleApplicationRequest`

Request to change the scale of a Hyperlift application.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `scale` | `int` | yes | Desired scale: 0 stops the application, 1 starts (runs) it. Constraints: `{"minimum": 0, "maximum": 1}`. |

## `SellerHubGetSellerDomainListQueryParams`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubGetSellerDomainListQueryParams`

Seller Hub Domains List Query Params

| Field | PHP type | Required | Description |
|---|---|---|---|
| `take` | `int` | yes | Number of response items per page Constraints: `{"minimum": 1, "maximum": 100}`. |
| `skip` | `int` | yes | Number of response items to skip Constraints: `{"minimum": 0, "maximum": 2147483647}`. |

## `SellerHubGetSellerDomainListResponse`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubGetSellerDomainListResponse`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `contactId` | `string` | yes | Response with contactId generated, if contact was created, or existing contact's one. Constraints: `{"minLength": 27, "maxLength": 32, "pattern": "[a-zA-Z0-9]+"}`. |

## `SellerHubVerificationOption`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubVerificationOption`

Represents one verification method option.
Each option contains one or more DNS records that must all be created together.
Users can choose any ONE option from the available options to verify domain ownership.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `records` | `list<\CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubVerificationRecord>` | yes | Array of DNS records that must all be created for this verification option. All records in this array are required (AND logic). Constraints: `{"minItems": 1, "maxItems": 10}`. |

## `SellerHubVerificationRecord`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubVerificationRecord`

Verification record response

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes | Type of DNS resource record to create for domain verification Constraints: `{"minLength": 1, "maxLength": 5, "pattern": "\\w+"}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain. Use this value as the 'Name' or 'Host' field when creating the DNS record.  Common values: - '@' - Applies the record at the apex/root of your domain |
| `value` | `string` | yes | Verification value to be set as the DNS record value. Format depends on record type (token for TXT, IP for A/AAAA, etc.). Constraints: `{"maxLength": 256, "pattern": "^[a-zA-Z0-9._:/-]+$"}`. |

## `SellerHubVerificationResponse`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubVerificationResponse`

Verification response containing one or more verification options.
Users can choose to implement ANY ONE of the provided options (OR logic).
Within each option, ALL records must be created (AND logic).

| Field | PHP type | Required | Description |
|---|---|---|---|
| `options` | `list<\CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubVerificationOption>` | yes | Array of verification options available for domain verification.  **OR Logic:** Choose any ONE option from this array to verify your domain. **AND Logic:** Within the chosen option, create ALL records listed.  If only one option is provided, that is the required verification method. If multiple options are provided, you can choose the most convenient method for your setup. Constraints: `{"minItems": 1, "maxItems": 5}`. |

## `SellerHubDomainResponse`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubDomainResponse`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `name` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName` | yes |  |
| `unicodeName` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameULabel` | yes |  |
| `displayName` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DisplayName or null` | no | Full domain name with original capitalization setup |
| `description` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DomainDescription or null` | no | Domain description |
| `status` | `CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SellerHubDomainStatus` | yes | Current status of the domain in SellerHub |
| `minPrice` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price or null` | no | Minimum offer price for the domain |
| `binPrice` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price or null` | no | Buy It Now (BIN) price for the domain |
| `binPriceEnabled` | `bool or null` | no | Indicates whether the Buy It Now (BIN) option is enabled |
| `minPriceEnabled` | `bool or null` | no | Indicates whether offer negotiation with minimum price is enabled |

## `SellerHubDomainStatus`

`CommunitySDKs\Spaceship\DTO\SellerHub\Enum\SellerHubDomainStatus`

SellerHub domain status

Allowed values: `failed`, `verifying`, `onSale`, `onSaleStopped`, `saleProcessing`, `leaseActive`, `sold`.

## `SoldDomainResponse`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SoldDomainResponse`

Represents a sold domain in SellerHub

| Field | PHP type | Required | Description |
|---|---|---|---|
| `name` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName` | yes | Domain name in ASCII-compatible encoding (A-label / punycode). Always-safe form for tooling that doesn't render Unicode; the human-readable form lives in `unicodeName`. |
| `unicodeName` | `CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameULabel` | yes | Domain name in Unicode form (U-label). Equals `name` for ASCII-only domains; differs for internationalized domains. |
| `displayName` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DisplayName or null` | no | Display form of the domain name preserving the original capitalization configured by the seller (e.g., "SpaceShip.com"). Identical to `unicodeName` for domains without custom capitalization. |
| `saleDateTime` | `CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate or null` | yes | Date and time when the domain was sold as a full ISO-8601 UTC datetime (e.g., `2024-01-15T14:30:00.000Z`). Null if the sale date is not available. Records with a null sale date are excluded from results when a `saleDateTimeFrom`/`saleDateTimeTo` filter is applied. |
| `salePrice` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price` | yes | The gross amount at which the domain was sold (buyer's purchase price, before Spaceship marketplace fees are deducted). |
| `payout` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Price` | yes | The net amount paid to the seller after Spaceship marketplace fees are deducted from the sale price. |
| `source` | `string` | yes | The channel through which the domain was sold (e.g., spaceshipSearch, forSalePage, checkoutLink). Returned as the literal `N/A` when the channel is unknown. New camelCase values may be added in the future. Constraints: `{"maxLength": 100, "pattern": "^([A-Za-z][A-Za-z0-9]*\|N/A)$"}`. |

## `SrvResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\SrvResourceRecord`

Used to specify the location of servers for specific services

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["SRV"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `service` | `string` | yes | Specifies the symbolic name of the desired service. For example, "_sip" for SIP (Session Initiation Protocol) or "_ldap" for LDAP (Lightweight Directory Access Protocol) Constraints: `{"minLength": 2, "maxLength": 63, "pattern": "_[a-zA-Z0-9-]+"}`. |
| `protocol` | `string` | yes | Indicates the transport protocol the service uses, such as "_tcp" for TCP or "_udp" for UDP Constraints: `{"minLength": 2, "maxLength": 63, "pattern": "_[a-zA-Z0-9-]+"}`. |
| `priority` | `int` | yes | An integer that indicates the priority of the target host, with lower values indicating higher priority Constraints: `{"minimum": 0, "maximum": 65535}`. |
| `weight` | `int` | yes | Used in conjunction with the Priority field to load balance between multiple targets with the same priority. Higher values receive more connections. Constraints: `{"minimum": 0, "maximum": 65535}`. |
| `port` | `int` | yes | The port number on which the service is available. Constraints: `{"minimum": 1, "maximum": 65535}`. |
| `target` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | The domain name of the server providing the service. |

## `SrvResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\SrvResourceRecordCreateOrUpdateItem`

Used to specify the location of servers for specific services

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["SRV"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `service` | `string` | yes | Specifies the symbolic name of the desired service. For example, "_sip" for SIP (Session Initiation Protocol) or "_ldap" for LDAP (Lightweight Directory Access Protocol) Constraints: `{"minLength": 2, "maxLength": 63, "pattern": "_[a-zA-Z0-9-]+"}`. |
| `protocol` | `string` | yes | Indicates the transport protocol the service uses, such as "_tcp" for TCP or "_udp" for UDP Constraints: `{"minLength": 2, "maxLength": 63, "pattern": "_[a-zA-Z0-9-]+"}`. |
| `priority` | `int` | yes | An integer that indicates the priority of the target host, with lower values indicating higher priority Constraints: `{"minimum": 0, "maximum": 65535}`. |
| `weight` | `int` | yes | Used in conjunction with the Priority field to load balance between multiple targets with the same priority. Higher values receive more connections. Constraints: `{"minimum": 0, "maximum": 65535}`. |
| `port` | `int` | yes | The port number on which the service is available. Constraints: `{"minimum": 1, "maximum": 65535}`. |
| `target` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | The domain name of the server providing the service. |

## `SrvResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\SrvResourceRecordDeleteItem`

Used to specify the location of servers for specific services

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["SRV"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `service` | `string` | yes | Specifies the symbolic name of the desired service. For example, "_sip" for SIP (Session Initiation Protocol) or "_ldap" for LDAP (Lightweight Directory Access Protocol) Constraints: `{"minLength": 2, "maxLength": 63, "pattern": "_[a-zA-Z0-9-]+"}`. |
| `protocol` | `string` | yes | Indicates the transport protocol the service uses, such as "_tcp" for TCP or "_udp" for UDP Constraints: `{"minLength": 2, "maxLength": 63, "pattern": "_[a-zA-Z0-9-]+"}`. |
| `priority` | `int` | yes | An integer that indicates the priority of the target host, with lower values indicating higher priority Constraints: `{"minimum": 0, "maximum": 65535}`. |
| `weight` | `int` | yes | Used in conjunction with the Priority field to load balance between multiple targets with the same priority. Higher values receive more connections. Constraints: `{"minimum": 0, "maximum": 65535}`. |
| `port` | `int` | yes | The port number on which the service is available. Constraints: `{"minimum": 1, "maximum": 65535}`. |
| `target` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | The domain name of the server providing the service. |

## `SvcbResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\SvcbResourceRecord`

Used to allow a service to be provided from multiple alternative endpoints, each with associated parameters.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["SVCB"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `port` | `array or null` | no | Specifies the port number for which the SVCB record is applicable. If specified, it must be a single wildcard (an asterisk symbol) or a string that starts with an underscore and continues with a number from 1 to 65535. |
| `scheme` | `string or null` | no | Indicates the scheme over which the SVCB record applies, such as "_tcp" for TCP or "_udp" for UDP. Constraints: `{"maxLength": 63, "pattern": "_[a-zA-Z0-9-]+"}`. |
| `svcPriority` | `int` | yes | The priority of this record (relative to others, with lower values preferred). When svcPriority is 0, the SVCB record is in AliasMode. Otherwise, it is in ServiceMode. Constraints: `{"minimum": 0, "maximum": 65535}`. |
| `targetName` | `array` | yes | A fully qualified domain name (FQDN) or a single ".", either the alias target (for AliasMode) or the alternative endpoint (for ServiceMode). For AliasMode, a TargetName of "." indicates that the service is not available or does not exist. For ServiceMode, if TargetName has the value ".", then the owner name of this record is used as the effective TargetName. Constraints: `{"maxLength": 253}`. |
| `svcParams` | `string` | yes | A whitespace-separated list with parameters describing the alternative endpoint at TargetName (only used in ServiceMode and otherwise ignored). Each SvcParam consisting of a SvcParamKey=SvcParamValue pair or a standalone SvcParamKey.  Initial keys: "mandatory", "alpn", "no-default-alpn", "port", "ipv4hint", "ech", "ipv6hint", "dohpath", "ohttp", "tls-supported-groups".  Arbitrary keys can be represented using the unknown-key presentation format "keyNNNNN" where NNNNN is the numeric value of the key type without leading zeros (Number 0-65535). Constraints: `{"minLength": 0, "maxLength": 65535, "pattern": ".*"}`. |

## `SvcbResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\SvcbResourceRecordCreateOrUpdateItem`

Used to allow a service to be provided from multiple alternative endpoints, each with associated parameters.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["SVCB"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `port` | `array or null` | no | Specifies the port number for which the SVCB record is applicable. If specified, it must be a single wildcard (an asterisk symbol) or a string that starts with an underscore and continues with a number from 1 to 65535. |
| `scheme` | `string or null` | no | Indicates the scheme over which the SVCB record applies, such as "_tcp" for TCP or "_udp" for UDP. Constraints: `{"maxLength": 63, "pattern": "_[a-zA-Z0-9-]+"}`. |
| `svcPriority` | `int` | yes | The priority of this record (relative to others, with lower values preferred). When svcPriority is 0, the SVCB record is in AliasMode. Otherwise, it is in ServiceMode. Constraints: `{"minimum": 0, "maximum": 65535}`. |
| `targetName` | `array` | yes | A fully qualified domain name (FQDN) or a single ".", either the alias target (for AliasMode) or the alternative endpoint (for ServiceMode). For AliasMode, a TargetName of "." indicates that the service is not available or does not exist. For ServiceMode, if TargetName has the value ".", then the owner name of this record is used as the effective TargetName. Constraints: `{"maxLength": 253}`. |
| `svcParams` | `string` | yes | A whitespace-separated list with parameters describing the alternative endpoint at TargetName (only used in ServiceMode and otherwise ignored). Each SvcParam consisting of a SvcParamKey=SvcParamValue pair or a standalone SvcParamKey.  Initial keys: "mandatory", "alpn", "no-default-alpn", "port", "ipv4hint", "ech", "ipv6hint", "dohpath", "ohttp", "tls-supported-groups".  Arbitrary keys can be represented using the unknown-key presentation format "keyNNNNN" where NNNNN is the numeric value of the key type without leading zeros (Number 0-65535). Constraints: `{"minLength": 0, "maxLength": 65535, "pattern": ".*"}`. |

## `SvcbResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\SvcbResourceRecordDeleteItem`

Used to allow a service to be provided from multiple alternative endpoints, each with associated parameters.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["SVCB"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `port` | `array or null` | no | Specifies the port number for which the SVCB record is applicable. If specified, it must be a single wildcard (an asterisk symbol) or a string that starts with an underscore and continues with a number from 1 to 65535. |
| `scheme` | `string or null` | no | Indicates the scheme over which the SVCB record applies, such as "_tcp" for TCP or "_udp" for UDP. Constraints: `{"maxLength": 63, "pattern": "_[a-zA-Z0-9-]+"}`. |
| `svcPriority` | `int` | yes | The priority of this record (relative to others, with lower values preferred). When svcPriority is 0, the SVCB record is in AliasMode. Otherwise, it is in ServiceMode. Constraints: `{"minimum": 0, "maximum": 65535}`. |
| `targetName` | `array` | yes | A fully qualified domain name (FQDN) or a single ".", either the alias target (for AliasMode) or the alternative endpoint (for ServiceMode). For AliasMode, a TargetName of "." indicates that the service is not available or does not exist. For ServiceMode, if TargetName has the value ".", then the owner name of this record is used as the effective TargetName. Constraints: `{"maxLength": 253}`. |
| `svcParams` | `string` | yes | A whitespace-separated list with parameters describing the alternative endpoint at TargetName (only used in ServiceMode and otherwise ignored). Each SvcParam consisting of a SvcParamKey=SvcParamValue pair or a standalone SvcParamKey.  Initial keys: "mandatory", "alpn", "no-default-alpn", "port", "ipv4hint", "ech", "ipv6hint", "dohpath", "ohttp", "tls-supported-groups".  Arbitrary keys can be represented using the unknown-key presentation format "keyNNNNN" where NNNNN is the numeric value of the key type without leading zeros (Number 0-65535). Constraints: `{"minLength": 0, "maxLength": 65535, "pattern": ".*"}`. |

## `TlsaResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\TlsaResourceRecord`

Used to associate a TLS server certificate or public key with the domain name where the record is found.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["TLSA"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `port` | `array` | yes | Specifies the port number for which the TLSA record is applicable. Should be equal asterisk or must start with an underscore and have a number between 1 and 65535 |
| `protocol` | `string` | yes | Indicates the protocol over which the TLSA record applies, such as "_tcp" for TCP or "_udp" for UDP. Constraints: `{"minLength": 2, "maxLength": 63, "pattern": "_[a-zA-Z0-9-]+"}`. |
| `usage` | `int` | yes | Specifies how the certificate association is used Constraints: `{"minimum": 0, "maximum": 255}`. |
| `selector` | `int` | yes | Specifies which part of the certificate to use Constraints: `{"minimum": 0, "maximum": 255}`. |
| `matching` | `int` | yes | Defines how the certificate association is presented in the record Constraints: `{"minimum": 0, "maximum": 255}`. |
| `associationData` | `string` | yes | The actual data (hash or full certificate) that the TLSA record is associating with the domain name. Constraints: `{"minLength": 64, "maxLength": 65535, "pattern": "^(?!\\s)(\\s?[0-9a-f]{2})+$"}`. |

## `TlsaResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\TlsaResourceRecordCreateOrUpdateItem`

Used to associate a TLS server certificate or public key with the domain name where the record is found.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["TLSA"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `port` | `array` | yes | Specifies the port number for which the TLSA record is applicable. Should be equal asterisk or must start with an underscore and have a number between 1 and 65535 |
| `protocol` | `string` | yes | Indicates the protocol over which the TLSA record applies, such as "_tcp" for TCP or "_udp" for UDP. Constraints: `{"minLength": 2, "maxLength": 63, "pattern": "_[a-zA-Z0-9-]+"}`. |
| `usage` | `int` | yes | Specifies how the certificate association is used Constraints: `{"minimum": 0, "maximum": 255}`. |
| `selector` | `int` | yes | Specifies which part of the certificate to use Constraints: `{"minimum": 0, "maximum": 255}`. |
| `matching` | `int` | yes | Defines how the certificate association is presented in the record Constraints: `{"minimum": 0, "maximum": 255}`. |
| `associationData` | `string` | yes | The actual data (hash or full certificate) that the TLSA record is associating with the domain name. Constraints: `{"minLength": 64, "maxLength": 65535, "pattern": "^(?!\\s)(\\s?[0-9a-f]{2})+$"}`. |

## `TlsaResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\TlsaResourceRecordDeleteItem`

Used to associate a TLS server certificate or public key with the domain name where the record is found.

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["TLSA"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `port` | `array` | yes | Specifies the port number for which the TLSA record is applicable. Should be equal asterisk or must start with an underscore and have a number between 1 and 65535 |
| `protocol` | `string` | yes | Indicates the protocol over which the TLSA record applies, such as "_tcp" for TCP or "_udp" for UDP. Constraints: `{"minLength": 2, "maxLength": 63, "pattern": "_[a-zA-Z0-9-]+"}`. |
| `usage` | `int` | yes | Specifies how the certificate association is used Constraints: `{"minimum": 0, "maximum": 255}`. |
| `selector` | `int` | yes | Specifies which part of the certificate to use Constraints: `{"minimum": 0, "maximum": 255}`. |
| `matching` | `int` | yes | Defines how the certificate association is presented in the record Constraints: `{"minimum": 0, "maximum": 255}`. |
| `associationData` | `string` | yes | The actual data (hash or full certificate) that the TLSA record is associating with the domain name. Constraints: `{"minLength": 64, "maxLength": 65535, "pattern": "^(?!\\s)(\\s?[0-9a-f]{2})+$"}`. |

## `TxtResourceRecord`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\TxtResourceRecord`

used to store arbitrary text data associated with a domain.
It is commonly used for various purposes such as verifying domain ownership for services
like email authentication (SPF, DKIM), providing human-readable information,
or storing any text-based information required by applications

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["TXT"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `group` | `CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecordsGroup` | yes |  |
| `value` | `string` | yes | Text value Constraints: `{"minLength": 1, "maxLength": 65535, "pattern": ".*"}`. |

## `TxtResourceRecordCreateOrUpdateItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\TxtResourceRecordCreateOrUpdateItem`

used to store arbitrary text data associated with a domain.
It is commonly used for various purposes such as verifying domain ownership for services
like email authentication (SPF, DKIM), providing human-readable information,
or storing any text-based information required by applications

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["TXT"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `ttl` | `int or null` | no | Specifies the amount of time in seconds that a DNS record should be cached by a resolver or a caching server before it expires and needs to be refreshed from the authoritative DNS servers Constraints: `{"minimum": 60, "maximum": 3600}`. |
| `value` | `string` | yes | Text value Constraints: `{"minLength": 1, "maxLength": 65535, "pattern": ".*"}`. |

## `TxtResourceRecordDeleteItem`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\TxtResourceRecordDeleteItem`

used to store arbitrary text data associated with a domain.
It is commonly used for various purposes such as verifying domain ownership for services
like email authentication (SPF, DKIM), providing human-readable information,
or storing any text-based information required by applications

| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["TXT"]}`. |
| `name` | `CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue` | yes | Name of resource record excluding domain name part. '@' can be used as an apex domain |
| `value` | `string` | yes | Text value Constraints: `{"minLength": 1, "maxLength": 65535, "pattern": ".*"}`. |

## `UnauthorizedError`

`CommunitySDKs\Spaceship\DTO\Common\Schema\UnauthorizedError`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `detail` | `string` | yes | A general message about the exception Constraints: `{"pattern": "^[\\s\|\\S]*$"}`. |

## `UnexpectedError`

`CommunitySDKs\Spaceship\DTO\Common\Schema\UnexpectedError`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `detail` | `string` | yes | A general message about the exception Constraints: `{"pattern": "^[\\s\|\\S]*$"}`. |

## `UpdateSellerHubDomainRequest`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\UpdateSellerHubDomainRequest`

Update SellerHub domain request

| Field | PHP type | Required | Description |
|---|---|---|---|
| `description` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DomainDescription or null` | no | Domain description |
| `displayName` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DisplayName or null` | no | Display name for the domain |
| `binPriceEnabled` | `bool or null` | no | Enable or disable the Buy It Now (BIN) option |
| `binPrice` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\PriceUpdate or null` | no | Buy It Now (BIN) price for the domain |
| `minPriceEnabled` | `bool or null` | no | Enable or disable offer negotiation with minimum price |
| `minPrice` | `CommunitySDKs\Spaceship\DTO\SellerHub\Schema\PriceUpdate or null` | no | Minimum offer price for the domain |

## `UsAttributeDetails`

`CommunitySDKs\Spaceship\DTO\ContactsAttributes\Schema\UsAttributeDetails`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `type` | `string` | yes |  Constraints: `{"enum": ["us"]}`. |
| `appPurpose` | `string` | yes |  Constraints: `{"enum": ["P1", "P2", "P3", "P4", "P5"]}`. |
| `nexusCategory` | `string` | yes |  Constraints: `{"enum": ["C11", "C12", "C21", "C31", "C32"]}`. |

## `ValidationError`

`CommunitySDKs\Spaceship\DTO\Common\Schema\ValidationError`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `detail` | `string` | yes | A general message about the exception Constraints: `{"pattern": "^[\\s\|\\S]*$"}`. |
| `data` | `list<\CommunitySDKs\Spaceship\DTO\Common\Schema\ValidationErrorDataItem>` | yes | A detailed list of validation errors |

## `ApplicationDomain`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationDomain`

Custom domain bound to a Hyperlift application.


## `ApplicationId`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationId`

Unique identifier of a Hyperlift application.


## `ApplicationLogsCursor`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationLogsCursor`

Opaque resume cursor issued by the runtime and build log endpoints. Pass it back unchanged.


## `ApplicationPlan`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationPlan`

Identifier of the plan a Hyperlift application runs on, e.g. `hyperlift_micro`,
`hyperlift_small`, `hyperlift_medium`, `hyperlift_large`, `hyperlift_extra_large`.


## `AuthCode`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\AuthCode`

Authorization code for the domain


## `ContactId`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\ContactId`

Contact ID


## `CountryCode`

`CommunitySDKs\Spaceship\DTO\Contacts\Schema\CountryCode`

Country code (ISO 3166-1 alpha-2)


## `DisplayName`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DisplayName`

Display name for a domain with original capitalization


## `DockerfilePath`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\DockerfilePath`

Path to the Dockerfile used to build a Hyperlift application.


## `DomainDescription`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\DomainDescription`

Domain description text


## `DomainName`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainName`

Domain name in UTF-8 or ASCII format (U-label or A-label)


## `DomainNameALabel`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameALabel`

Domain name in ASCII format (A-label)


## `DomainNameULabel`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainNameULabel`

Domain name in UTF-8 format (U-label)


## `Email`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Email`

An email address.


## `EnvironmentVariableValue`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariableValue`

Value of a single Hyperlift environment variable.


## `ErrorCode`

`CommunitySDKs\Spaceship\DTO\Common\Schema\ErrorCode`

The dot-separated error code indicating the type of the problem occurred


## `Fqdn`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\Fqdn`




## `GitBranch`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GitBranch`

Source branch deployed for a Hyperlift application.


## `GithubInstallationId`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GithubInstallationId`

Identifier of a connected GitHub App installation.


## `GithubRepositoryFullName`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GithubRepositoryFullName`

Full name (owner/repository) of a connected GitHub repository.


## `Host`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\Host`




## `HostNameValue`

`CommunitySDKs\Spaceship\DTO\Common\Schema\HostNameValue`




## `IpAddress`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\IpAddress`

An IP address represented as a string, which can be either IPv4 or IPv6 format.


## `IpV4Address`

`CommunitySDKs\Spaceship\DTO\Common\Schema\IpV4Address`

IPv4 address


## `IpV6Address`

`CommunitySDKs\Spaceship\DTO\Common\Schema\IpV6Address`

IPv6 address


## `IsoDate`

`CommunitySDKs\Spaceship\DTO\Common\Schema\IsoDate`

ISO-8601 DateTime


## `OperationId`

`CommunitySDKs\Spaceship\DTO\Common\Schema\OperationId`

16-characters unique identifier of the operation


## `Phone`

`CommunitySDKs\Spaceship\DTO\Contacts\Schema\Phone`

Phone number


## `PhoneExt`

`CommunitySDKs\Spaceship\DTO\Contacts\Schema\PhoneExt`

Phone number extension


## `SellerhubDomainName`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerhubDomainName`

SellerHub Domain Name


## `UnderscoredPort`

`CommunitySDKs\Spaceship\DTO\Common\Schema\UnderscoredPort`

A string that starts with an underscore and continues with a port number from 1 to 65535


## `Username`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Username`

A platform account username.


## `Uuid`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\Uuid`




## `GetResourceRecordsListResult`

`CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\GetResourceRecordsListResult`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `items` | `list<\CommunitySDKs\Spaceship\DTO\DNSRecords\Schema\ResourceRecord>` | yes |  Constraints: `{"maxItems": 100}`. |
| `total` | `int` | yes |  Constraints: `{"minimum": 0, "maximum": 2147483647}`. |

## `GetDomainListResult`

`CommunitySDKs\Spaceship\DTO\Domains\Schema\GetDomainListResult`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `items` | `list<\CommunitySDKs\Spaceship\DTO\Domains\Schema\DomainInfo>` | yes |  Constraints: `{"maxItems": 100}`. |
| `total` | `int` | yes |  Constraints: `{"minimum": 0, "maximum": 2147483647}`. |

## `GetHyperliftApplicationListResult`

`CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GetHyperliftApplicationListResult`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `items` | `list<\CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ExternalApplicationResponse>` | yes |  Constraints: `{"maxItems": 100}`. |
| `total` | `int` | yes |  Constraints: `{"minimum": 0, "maximum": 2147483647}`. |

## `GetSellerHubDomainListResult`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\GetSellerHubDomainListResult`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `items` | `list<\CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SellerHubDomainResponse>` | yes |  Constraints: `{"maxItems": 100}`. |
| `total` | `int` | yes |  Constraints: `{"minimum": 0, "maximum": 2147483647}`. |

## `GetSoldDomainsResult`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\GetSoldDomainsResult`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `items` | `list<\CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SoldDomainResponse>` | yes |  Constraints: `{"maxItems": 100}`. |
| `cursor` | `string or null` | no | Opaque pagination cursor for fetching the next page. Absent when there are no more results. Constraints: `{"maxLength": 2048, "pattern": "^[A-Za-z0-9+/=_-]+$"}`. |

## `GetSafePayTransactionListResult`

`CommunitySDKs\Spaceship\DTO\SellerHub\Schema\GetSafePayTransactionListResult`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `items` | `list<\CommunitySDKs\Spaceship\DTO\SellerHub\Schema\SafePayTransaction>` | yes |  Constraints: `{"maxItems": 100}`. |
| `total` | `int` | yes |  Constraints: `{"minimum": 0, "maximum": 2147483647}`. |

## `ValidationErrorDataItem`

`CommunitySDKs\Spaceship\DTO\Common\Schema\ValidationErrorDataItem`



| Field | PHP type | Required | Description |
|---|---|---|---|
| `field` | `string` | yes | The path to the field that caused the validation error Constraints: `{"pattern": "^[\\s\|\\S]*$"}`. |
| `details` | `string` | yes | A specific message about what is wrong with the field Constraints: `{"pattern": "^[\\s\|\\S]*$"}`. |
