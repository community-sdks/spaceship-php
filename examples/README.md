# Examples

These examples are configured for sandbox testing by default.
They use direct DTO construction with placeholder values instead of generated sample helpers.
Replace the placeholder IDs, domains, contact handles, and payload values before running them against a real account.

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

## Notes

- The scripts intentionally show explicit request DTO construction.
- Mutating examples such as create, update, save, and delete operations use obviously fake placeholder values.
- Review each file before running it against production credentials.

## Available example scripts

- examples/AsyncOperationsService.php
- examples/ContactsService.php
- examples/ContactsAttributesService.php
- examples/DNSRecordsService.php
- examples/DomainsService.php
- examples/SellerHubService.php
