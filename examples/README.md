# Examples

These examples are configured for sandbox testing by default.

## Environment variables

- SPACESHIP_API_KEY
- SPACESHIP_API_SECRET
- SPACESHIP_API_ENDPOINT (optional custom endpoint override)

## Run a single service example

**PowerShell:**
```powershell
$env:SPACESHIP_API_KEY='your_key'; $env:SPACESHIP_API_SECRET='your_secret'; php examples/DomainsService.php
```

**Bash (Mac / Linux / Git Bash):**
```bash
SPACESHIP_API_KEY=your_key SPACESHIP_API_SECRET=your_secret php examples/DomainsService.php
```

## Available example scripts

- examples/AsyncOperationsService.php
- examples/ContactsService.php
- examples/ContactsAttributesService.php
- examples/DNSRecordsService.php
- examples/DomainsService.php
- examples/SellerHubService.php
