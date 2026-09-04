# HyperliftService

Generated from the bundled `openapi.json`. Optional request arguments default to `null` and are omitted from the wire. Response bodies are hydrated into DTOs; empty responses have `data === null`.

## `getHyperliftApplicationList`

Get Hyperlift application list

`GET /v1/hyperlift/applications`

- Request: `CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationListRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationListResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\GetHyperliftApplicationListResult`
- Exception: `CommunitySDKs\Spaceship\Exception\Hyperlift\GetHyperliftApplicationListException`
- Scopes: `hyperlift:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `take` | `int` | yes | Number of response items per page |
| `skip` | `int` | yes | Number of response items to skip |

## `getHyperliftApplication`

Get a Hyperlift application

`GET /v1/hyperlift/applications/{id}`

- Request: `CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ExternalApplicationResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Hyperlift\GetHyperliftApplicationException`
- Scopes: `hyperlift:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `id` | `string` | yes | Application identifier |

## `buildHyperliftApplication`

Build a Hyperlift application

`POST /v1/hyperlift/applications/{id}/build`

- Request: `CommunitySDKs\Spaceship\DTO\Hyperlift\Request\BuildHyperliftApplicationRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Hyperlift\Response\BuildHyperliftApplicationResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMutationResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Hyperlift\BuildHyperliftApplicationException`
- Scopes: `hyperlift:execute`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `id` | `string` | yes | Application identifier |

## `getHyperliftApplicationBuildLogs`

Get Hyperlift application build logs

`GET /v1/hyperlift/applications/{id}/build-logs`

- Request: `CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationBuildLogsRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationBuildLogsResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationLogsResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Hyperlift\GetHyperliftApplicationBuildLogsException`
- Scopes: `hyperlift:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `id` | `string` | yes | Application identifier |
| `take` | `int` | no | Maximum number of log lines to return per page (default 100). |
| `cursor` | `string` | no | Resume cursor from a previous response; returns only lines produced after it. |

## `getHyperliftApplicationEnvironment`

Get Hyperlift application environment variables

`GET /v1/hyperlift/applications/{id}/environment`

- Request: `CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationEnvironmentRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationEnvironmentResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariablesResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Hyperlift\GetHyperliftApplicationEnvironmentException`
- Scopes: `hyperlift:manage`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `id` | `string` | yes | Application identifier |

## `updateHyperliftApplicationEnvironment`

Update Hyperlift application environment variables

`PUT /v1/hyperlift/applications/{id}/environment`

- Request: `CommunitySDKs\Spaceship\DTO\Hyperlift\Request\UpdateHyperliftApplicationEnvironmentRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Hyperlift\Response\UpdateHyperliftApplicationEnvironmentResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMutationResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Hyperlift\UpdateHyperliftApplicationEnvironmentException`
- Scopes: `hyperlift:manage`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `id` | `string` | yes | Application identifier |
| `body` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\EnvironmentVariables` | yes | Typed JSON body |

## `getHyperliftApplicationLogs`

Get Hyperlift application logs

`GET /v1/hyperlift/applications/{id}/logs`

- Request: `CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationLogsRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationLogsResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationLogsResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Hyperlift\GetHyperliftApplicationLogsException`
- Scopes: `hyperlift:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `id` | `string` | yes | Application identifier |
| `take` | `int` | no | Maximum number of log lines to return per page (default 100). |
| `cursor` | `string` | no | Resume cursor from a previous response; returns only lines produced after it. |

## `getHyperliftApplicationMetrics`

Get Hyperlift application metrics

`GET /v1/hyperlift/applications/{id}/metrics`

- Request: `CommunitySDKs\Spaceship\DTO\Hyperlift\Request\GetHyperliftApplicationMetricsRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Hyperlift\Response\GetHyperliftApplicationMetricsResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMetricsResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Hyperlift\GetHyperliftApplicationMetricsException`
- Scopes: `hyperlift:read`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `id` | `string` | yes | Application identifier |
| `startDate` | `string` | yes | Inclusive lower bound of the time range as a full ISO-8601 UTC datetime (e.g., `2026-01-15T00:00:00.000Z`). |
| `endDate` | `string` | yes | Inclusive upper bound of the time range as a full ISO-8601 UTC datetime (e.g., `2026-01-16T00:00:00.000Z`). |
| `interval` | `string` | yes | Sampling interval that sets the metric bucket size: a number followed by a unit (`s`, `m`, `h` or `d`), for example `10m` or `1h`. A request may span at most 1,500 intervals (e.g. a day at `5m`, or a month at `1h`). |
| `metrics` | `string` | yes | Comma-separated list of metrics to return. Allowed values: `memoryUsageBytes`, `cpuUsagePercentage`, `networkReceiveRateBytes`, `networkTransmitRateBytes`, `ephemeralStorageUsedMebibytes`, `persistentStorageUsedMebibytes`. More metrics may be added over time. |

## `restartHyperliftApplication`

Restart a Hyperlift application

`POST /v1/hyperlift/applications/{id}/restart`

- Request: `CommunitySDKs\Spaceship\DTO\Hyperlift\Request\RestartHyperliftApplicationRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Hyperlift\Response\RestartHyperliftApplicationResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMutationResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Hyperlift\RestartHyperliftApplicationException`
- Scopes: `hyperlift:execute`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `id` | `string` | yes | Application identifier |

## `scaleHyperliftApplication`

Scale a Hyperlift application

`PUT /v1/hyperlift/applications/{id}/scale`

- Request: `CommunitySDKs\Spaceship\DTO\Hyperlift\Request\ScaleHyperliftApplicationRequest`
- Response: `CommunitySDKs\Spaceship\DTO\Hyperlift\Response\ScaleHyperliftApplicationResponse`
- `data`: `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ApplicationMutationResponse`
- Exception: `CommunitySDKs\Spaceship\Exception\Hyperlift\ScaleHyperliftApplicationException`
- Scopes: `hyperlift:execute`

| Argument | PHP type | Required | Description |
|---|---|---|---|
| `id` | `string` | yes | Application identifier |
| `body` | `CommunitySDKs\Spaceship\DTO\Hyperlift\Schema\ScaleApplicationRequest` | yes | Typed JSON body |
