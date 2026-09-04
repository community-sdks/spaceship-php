# Changelog

## 2.0.0

- Cover all 50 operations in the bundled OpenAPI contract, adding Hyperlift and SellerHub SafePay/sold-domain operations.
- Replace untyped response payloads with recursively hydrated DTOs and validate collection element types.
- Preserve arbitrary async details and support typed environment-variable dictionaries.
- Synchronize schemas, including checkout commission splits and inline paginated results.
- Fix optional query omission, comma-separated array query encoding, path encoding, JSON encoding errors, and endpoint-specific HTTP exceptions.
- Expose async operation IDs through response helpers; model bodyless responses explicitly.
- Remove the unused scalar schema superclass and test-only schema.
- Add reproducible contract generation, complete endpoint/DTO references, migration guidance, and contract tests for every endpoint.

This is a breaking release. See [migration instructions](docs/MIGRATION-v2.md).
