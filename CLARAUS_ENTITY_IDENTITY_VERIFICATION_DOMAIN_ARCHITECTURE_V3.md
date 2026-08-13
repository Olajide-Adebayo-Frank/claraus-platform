# Claraus Entity Identity, Verification & Domain Infrastructure Architecture

**Version:** 3.0  
**Status:** Strategic Architecture  
**Purpose:** Define the long-term identity, verification, domain association, domain registration, ownership, editorial authority, and infrastructure direction of Claraus.

---

## 1. Strategic Purpose

Claraus is designed to become a structured authority and identity platform for people and organizations.

It is not simply:

- a company directory
- a founder directory
- an editorial publication
- a ranking website
- a domain registrar

These are components of a broader system.

The core Claraus object is the **entity**.

An entity may be a:

- Person
- Founder
- Executive
- Company
- Organization
- Institution
- Other approved entity type

The entity maintains a persistent Claraus identity while domains, websites, roles, relationships, and external digital properties may change over time.

---

## 2. Core Principle

The Claraus identity must remain independent of domain registration.

A domain is an optional digital property associated with an entity.

Therefore:

> **Owning a domain through Claraus is optional. Having a Claraus identity is not dependent on where the domain was purchased.**

Claraus must support both existing domain owners and customers who later choose to register domains through Claraus.

---

## 3. The Two Domain Paths

Claraus must support two equally valid paths.

### Path A — Existing Domain

A person or organization already owns or controls a domain registered elsewhere.

Example:

```text
company.com
```

The user can:

```text
Existing Domain
      ↓
Connect to Claraus
      ↓
Verify Control
      ↓
Associate with Entity
      ↓
Use Claraus Identity
```

The user does not need to transfer the domain to Claraus.

They do not need to purchase the domain again.

They do not lose their existing registrar relationship.

---

### Path B — Claraus Domain

A person or organization does not yet have a domain or wants to obtain another domain.

The future Claraus domain service may provide:

```text
Search Domain
      ↓
Register Through Claraus
      ↓
Domain Becomes Associated With Entity
      ↓
Claraus Identity
```

The underlying registration infrastructure may be provided through an external domain reseller or registrar provider.

Claraus remains the customer-facing platform.

---

## 4. No User Should Be Excluded

The Claraus architecture must never create a requirement that an entity purchase a domain through Claraus.

The following users must remain supported:

### Existing Domain Owner

Can connect and verify an existing domain.

### New Domain User

Can eventually register a domain through Claraus.

### Multiple Domain Owner

Can associate multiple domains with one entity.

### No-Domain User

Can maintain a Claraus identity/profile without a domain where appropriate.

### Domain Change User

Can replace or update a primary domain without creating a new entity.

This makes the domain service an **optional infrastructure layer**, rather than a gatekeeper to Claraus identity.

---

## 5. Entity Is the Primary Object

The architecture should conceptually follow:

```text
ENTITY
│
├── IDENTITY
├── PROFILE
├── DOMAINS
├── OWNERSHIP / CONTROL
├── FOUNDERS
├── EXECUTIVES
├── ORGANIZATIONS
├── ARTICLES
├── RANKINGS
└── VERIFICATION
```

The entity receives the persistent Claraus identity.

Domains are attached to the entity.

The entity must not be recreated merely because a domain changes.

---

## 6. Persistent Entity Identity

Each entity should have a stable internal Claraus identifier.

For example:

```text
Claraus Entity ID
        ↓
Person / Company / Organization
        ↓
Profile
        ↓
Relationships
        ↓
Domains
        ↓
Editorial Record
        ↓
Rankings
```

The identifier should survive:

- domain changes
- website redesigns
- company rebranding
- domain transfers
- addition of new domains
- removal of old domains

Where a legal or identity change creates a genuinely new entity, the system should handle that through explicit entity-management rules rather than accidental duplication.

---

## 7. Domain Association

A domain can be associated with an entity.

Possible relationship:

```text
ENTITY
   │
   └── has_domain
          │
          └── DOMAIN
```

A domain record may contain:

- Domain name
- Entity ID
- Association status
- Verification status
- Primary/secondary designation
- Registration provider where applicable
- Registration state where available
- Verification date
- Last verification event
- Lifecycle state

---

## 8. Existing Domains Must Be Supported

Claraus must not assume that every domain is registered through Claraus.

A domain may be registered with:

- GoDaddy
- Namecheap
- Cloudflare Registrar
- a local registrar
- another accredited provider
- a future Claraus domain provider

The Claraus system cares about the **relationship between the domain and the entity**, not merely where the domain was purchased.

The provider should therefore be treated as infrastructure metadata rather than as the identity itself.

---

## 9. Domain Verification

Domain association and domain verification are separate concepts.

A user may submit:

```text
company.com
```

Claraus should not automatically mark it as verified.

The verification flow is:

```text
User submits domain
        ↓
Claraus creates verification request
        ↓
Claraus provides verification method
        ↓
User proves control
        ↓
Claraus validates proof
        ↓
Verification succeeds
        ↓
Domain becomes verified for the entity
```

Possible methods may include:

- DNS TXT record
- DNS-based verification
- Website file
- Website metadata
- Other secure verification methods

The implementation should use a centralized verification service.

---

## 10. Claiming Is Not Verification

Claraus must maintain a distinction between:

### Claimed

A person has requested control or management of an entity profile.

### Verified

Claraus has obtained sufficient evidence supporting the relevant claim or domain control.

### Editorially Documented

Claraus has independently created or published an editorial record for the entity.

These states may coexist.

They must not be treated as identical.

---

## 11. Multiple Domains

One entity may have multiple associated domains.

Example:

```text
Company
│
├── company.com
├── company.ng
├── company.africa
└── companygroup.com
```

One may be designated:

```text
Primary Domain
```

Others may be:

```text
Associated Domains
```

The system must preserve the relationship between all valid domains without creating duplicate company identities.

---

## 12. Domain Lifecycle

Domain information should have its own lifecycle.

Possible states:

- Unassociated
- Pending verification
- Verified
- Active
- Expiring
- Expired
- Suspended
- Transferred
- Disconnected
- Revoked

Domain lifecycle logic must remain separate from core entity logic.

---

## 13. Domain Registration as an Optional Claraus Service

Claraus may eventually provide domain registration as a commercial service.

The architecture should support:

- Domain search
- Availability checks
- Registration
- Renewal
- Transfer
- DNS management where supported
- Domain association
- Domain verification

However:

> **Domain registration is an optional Claraus service, not a prerequisite for Claraus identity.**

This principle must remain intact even if Claraus later develops a substantial domain business.

---

## 14. Domain Reseller Architecture

Claraus should initially avoid becoming a registrar itself.

The preferred architecture is:

```text
CUSTOMER
    ↓
CLARAUS
    ↓
CLARAUS DOMAIN SERVICE
    ↓
PROVIDER ADAPTER
    ↓
DOMAIN RESELLER / REGISTRAR
    ↓
REGISTRY INFRASTRUCTURE
```

The provider-specific API must be isolated behind the Claraus domain service.

This allows Claraus to change providers without rebuilding the identity system.

---

## 15. Provider Independence

Claraus should own the customer-facing experience and identity relationship.

Claraus should control:

- Entity identity
- Domain association
- Verification records
- Customer relationship
- Product experience
- Editorial identity
- Profile relationships

The external provider supplies domain infrastructure.

The architecture must avoid unnecessary vendor lock-in.

---

## 16. Claraus Identity

The long-term product can evolve into:

# Claraus Identity

A structured identity layer connecting:

```text
PERSON / ORGANIZATION
        ↓
CLARAUS ENTITY
        ↓
PROFILE
        ↓
VERIFICATION
        ↓
DOMAINS
        ↓
EDITORIAL RECORD
        ↓
SEARCH
        ↓
RANKINGS
        ↓
AUTHORITY SERVICES
```

A domain may strengthen the identity record, but the identity does not depend on the domain.

---

## 17. Authority Profile

A future Claraus Authority Profile may combine:

- Entity information
- Verified status
- Domain associations
- Founder relationships
- Executive relationships
- Company relationships
- Editorial documentation
- Rankings
- External references
- Public digital presence

This creates a persistent record that is more valuable than a standalone website or domain.

---

## 18. Domain as an Entry Point, Not the Identity

A domain may be:

```text
company.com
```

But Claraus records:

```text
ENTITY
Company
Claraus Entity ID
Verified Domain
Founders
Executives
Articles
Rankings
Relationships
```

Therefore the domain becomes an entry point into the entity's broader digital identity.

---

## 19. Security and Verification

Verification is security-sensitive.

The system should provide:

- Verification tokens
- Expiration
- Replay protection
- Verification method tracking
- Verification timestamps
- Audit records
- Revocation
- Re-verification
- Rate limiting
- Appropriate access controls

A verification badge must never be granted simply because a domain name was submitted.

---

## 20. Audit Trail

Important identity events should be recorded.

Examples:

```text
Profile claimed
Verification requested
Verification completed
Domain associated
Domain verified
Primary domain changed
Domain disconnected
Verification revoked
Ownership relationship changed
```

The audit trail should support administrative review without exposing sensitive internal information publicly.

---

## 21. Separation of Systems

The architecture must keep major responsibilities separate.

### Entity System

Identity of people and organizations.

### Domain System

Domains, lifecycle, registration and provider interactions.

### Verification System

Proof of control and verification state.

### Editorial System

Documentation and publication.

### Search System

Discovery and indexing.

### Rankings System

Ranking records and calculations.

### Billing System

Paid services and transactions.

### Account System

Users, permissions and access.

These systems may communicate through defined interfaces, but their responsibilities should not be mixed unnecessarily.

---

## 22. Reusability Rules

Claraus must avoid duplicated implementation.

Do not duplicate:

- PHP logic
- HTML
- CSS
- domain provider logic
- verification logic
- entity logic
- API integration logic

Shared functionality should live in centralized services or reusable components.

Existing Claraus architecture must be extended before creating competing implementations.

---

## 23. API Boundary

The domain system should use an abstraction such as:

```text
Claraus Domain Service
        ↓
Provider Adapter
        ↓
Provider API
```

The rest of the platform should communicate with the Claraus Domain Service rather than directly with a provider.

This allows future changes without rewriting the identity system.

---

## 24. Future Customer Experience

A typical existing-domain customer:

```text
Discover Claraus
      ↓
Create / Claim Entity
      ↓
Enter Existing Domain
      ↓
Verify Domain Control
      ↓
Associate Domain
      ↓
Receive Appropriate Verification State
      ↓
Build / Manage Claraus Identity
```

A future new-domain customer:

```text
Discover Claraus
      ↓
Create / Claim Entity
      ↓
Search for Domain
      ↓
Register Domain Through Claraus
      ↓
Associate Domain
      ↓
Verify Where Required
      ↓
Build / Manage Claraus Identity
```

A no-domain customer:

```text
Discover Claraus
      ↓
Create / Claim Entity
      ↓
Build / Manage Claraus Identity
      ↓
Add Domain Later If Desired
```

All three paths should converge into the same Claraus identity system.

---

## 25. Premium Services

Potential future Claraus services include:

- Domain registration
- Domain transfer
- Domain renewal
- Domain management
- Verified Identity
- Authority Profile
- Company documentation
- Founder documentation
- Executive documentation
- Editorial publication
- Rankings
- Enhanced profile features
- Organization ownership
- Future API access

The domain business should complement Claraus's authority and identity services rather than replace them.

---

## 26. Implementation Order

Implementation must happen progressively.

### Phase 1 — Entity Identity

Stabilize:

- Entity IDs
- Entity types
- Relationships
- Profile ownership concepts
- Claim states

### Phase 2 — Verification

Implement:

- Verification requests
- Verification methods
- Verification states
- Audit records
- Revocation
- Re-verification

### Phase 3 — Domain Association

Implement:

- Domain records
- Existing-domain connection
- Domain-to-entity relationships
- Primary domains
- Multiple domains
- Domain lifecycle

### Phase 4 — Domain Provider Infrastructure

Select a suitable provider and implement:

- Provider abstraction
- Availability
- Registration
- Renewal
- Transfer
- DNS capabilities where appropriate

### Phase 5 — Claraus Identity

Unify:

- Entity
- Profile
- Domain
- Verification
- Editorial
- Search
- Rankings
- Relationships

### Phase 6 — Commercial Identity Services

Introduce appropriate:

- Premium verification
- Authority profiles
- Domain services
- Enhanced organization profiles
- Additional identity services

---

## 27. Non-Negotiable Architectural Rules

1. **The entity is more important than the domain.**
2. **Existing external domains must be supported.**
3. **Users do not have to buy domains through Claraus.**
4. **Users without domains must not be excluded from Claraus identity.**
5. **A domain change must not create a duplicate entity.**
6. **Multiple domains may belong to one entity.**
7. **Claiming and verification must remain separate.**
8. **Domain verification must be secure and auditable.**
9. **Domain provider integrations must be abstracted.**
10. **The provider must be replaceable.**
11. **Domain registration must remain an optional service.**
12. **Entity, domain, verification, editorial, search, rankings and billing systems must remain properly separated.**
13. **Existing Claraus architecture should be extended rather than duplicated.**
14. **No production implementation should begin from assumptions that conflict with this document.**

---

## 28. Long-Term Vision

Claraus should evolve from:

> A platform that documents people and organizations.

Into:

> **A structured authority and identity platform where people and organizations can establish, verify, manage and maintain persistent digital identities.**

Domains support that identity.

They do not define it.

Whether a user:

- already owns a domain,
- registers one through Claraus,
- owns several domains,
- changes domains,
- or has no domain,

the user should still be able to participate in the Claraus identity ecosystem where eligible.

That flexibility is fundamental to the long-term architecture.

---

## 29. Final Architectural Model

```text
                         CLARAUS IDENTITY
                                │
              ┌─────────────────┼─────────────────┐
              │                 │                 │
           ENTITY           VERIFICATION       PROFILE
              │                 │                 │
       ┌──────┼──────┐          │          ┌──────┼──────┐
       │      │      │          │          │      │      │
    Person Company Org.       Proof      Editorial Search Rankings
       │      │      │
       └──────┼──────┘
              │
           DOMAINS
              │
       ┌──────┴─────────┐
       │                │
 Existing Domain    Claraus Domain
       │                │
 External Provider   Claraus Domain Service
                        │
                  Provider Adapter
                        │
                 Reseller / Registrar
```

The central principle remains:

> **Claraus owns the identity layer. Domains are connected infrastructure.**

This architecture must guide future implementation decisions across the Claraus WordPress application, child theme, services, APIs, domain infrastructure, verification system, editorial platform, search system and rankings system.
