# CLARAUS ENTITY IDENTITY & VERIFICATION ARCHITECTURE

Version: 1.0

## Purpose

This document defines the long-term architectural direction for Claraus Entity Identity and Verification.

It is an implementation reference for future development. It should be treated as an architectural contract when extending the Claraus platform.

The objective is not to add a simple domain redirect feature.

The objective is to establish Claraus as a structured authority platform where people and organizations have persistent, interconnected identities and documented records.

---

# 1. Core Principle

Claraus must not become simply:

> A website where companies have profiles.

Claraus should become:

> A structured authority platform where people and organizations have persistent, interconnected identities and documented records.

Every important entity should have a stable identity inside Claraus.

The domain is an entry point into that identity, not the identity itself.

---

# 2. Implementation Order

The system must be developed in this order:

1. Entity Identity
2. Entity Relationships
3. Editorial Records
4. Verification
5. Domain Association
6. Domain Redirect / Connection
7. Premium Authority Features

Do not implement domain mapping before the identity and verification foundations are stable.

Do not build a domain system that later has to be rebuilt because the underlying entity architecture is incomplete.

---

# 3. Claraus Entity Identity

Every supported entity must have a persistent Claraus identity.

Initial entity types:

- Founder
- Company
- Executive
- Organization
- Article / Insight
- Ranking

Each entity should have a canonical Claraus URL.

Examples:

    claraus.com/founders/name/
    claraus.com/companies/company/
    claraus.com/executives/name/
    claraus.com/organizations/name/

The exact URL structure must follow the existing Claraus routing and content architecture. Do not introduce competing URL systems.

---

# 4. Entity Identity Model

The conceptual entity structure is:

    ENTITY
    |
    +-- Identity
    +-- Profile
    +-- Relationships
    +-- Editorial Record
    +-- Verification
    +-- Rankings
    +-- Publications
    +-- Canonical URL

The implementation must keep data separate from presentation.

Reusable identity logic belongs in the shared application/data layer.

Templates should assemble and present data.

Do not duplicate entity logic across Founder, Company, Executive, or Organization templates.

---

# 5. Entity Relationships

Claraus is not only a collection of independent profile pages.

Entities must be capable of being connected.

Example:

    PERSON
       |
       +-- Founder of -> COMPANY
       +-- Executive at -> ORGANIZATION
       +-- Appears in -> ARTICLES
       +-- Appears in -> RANKINGS
       +-- Verified by -> DOMAIN

Relationships must be represented as structured data wherever possible.

The relationship system must remain reusable across entity types.

Do not create separate relationship logic for every individual profile type when one shared relationship system can support the relationship.

---

# 6. Editorial Authority Layer

The entity identity should connect to Claraus editorial records.

An entity may have:

- Editorial profile
- Editorial summary
- Articles
- Insights
- Rankings
- Related entities
- Historical records
- Verification status

Editorial content remains separate from verification data.

Verification should establish an association or ownership claim.

Verification must not automatically imply editorial endorsement, ranking, or factual approval beyond the specific verification performed.

---

# 7. Verification Architecture

Verification is the foundation for future domain association.

The conceptual flow is:

    User submits domain
            |
            v
    Claraus generates verification method
            |
            v
    User proves domain ownership
            |
            v
    Claraus verifies domain
            |
            v
    Domain is associated with entity
            |
            v
    Redirect / domain connection becomes available

The verification mechanism must be designed so that Claraus can later support more than one verification method.

Potential methods may include:

- DNS verification
- Website verification
- Verification file
- Verification meta tag

The exact method must be determined during implementation based on the hosting and infrastructure available at that time.

Do not assume or hard-code one verification method into the entity model.

---

# 8. Domain Association

A verified domain is an attribute associated with an existing Claraus entity.

It should not become a new entity type.

Conceptually:

    COMPANY
       |
       +-- Canonical Claraus Profile
       |
       +-- Verified Domain
               |
               +-- company.com

And:

    FOUNDER
       |
       +-- Canonical Claraus Profile
       |
       +-- Verified Domain
               |
               +-- founder.com

A domain must not be associated with an entity merely because a user submits it.

Ownership must be verified first.

---

# 9. Domain Redirect / Connection

Once domain ownership has been verified, Claraus may provide domain connection features.

The long-term concept is:

    company.com
          |
          v
    Verified Claraus Identity
          |
          v
    Claraus Company Profile

or:

    founder.com
          |
          v
    Verified Claraus Identity
          |
          v
    Claraus Founder Profile

The first implementation may use a standard permanent redirect where appropriate.

More advanced domain connection functionality can be introduced later.

Do not build advanced custom-domain infrastructure before the identity and verification layers are stable.

---

# 10. Domain Ownership and Security

Domain verification is an ownership mechanism.

It must not be treated as a general trust signal.

Verification means:

> The user has demonstrated control of the domain.

It does not automatically mean:

- Claraus endorses the entity
- Every claim made by the entity is verified
- The entity is ranked by Claraus
- The entity is editorially approved
- The domain owner is necessarily the legal owner of the organization

These distinctions must remain explicit in the architecture.

---

# 11. Premium Service Direction

Domain verification and connection can eventually become part of a premium Claraus service.

Possible service concepts:

## Claraus Verified Identity

A verified association between an entity and a domain.

## Claraus Authority Profile

A more advanced profile experience combining:

- Persistent entity identity
- Editorial profile
- Verification
- Domain association
- Structured relationships
- Rankings
- Publications

These names are architectural/product concepts and are not final product naming decisions.

Do not implement billing or premium access as part of the identity foundation unless explicitly required.

---

# 12. Short-Term Commitment

The immediate priority is NOT custom domain functionality.

The short-term commitment is to stabilize:

- Companies
- Founders
- Executives
- Organizations
- Articles / Insights
- Entity relationships
- Search
- Rankings
- Canonical URLs
- Internal linking
- Structured metadata
- Editorial profiles
- Verification/status architecture

The identity layer must be established before domain mapping.

---

# 13. Long-Term Commitment

The long-term Claraus direction is:

    Entity Identity
          |
          v
    Structured Relationships
          |
          v
    Editorial Authority
          |
          v
    Verification
          |
          v
    Domain Association
          |
          v
    Premium Authority Services
          |
          v
    APIs / External Integrations

The architecture must allow these capabilities to be added incrementally without replacing the underlying entity system.

---

# 14. Architectural Rules

The following rules are mandatory.

### Reuse

Every reusable system must have one authoritative implementation.

Do not duplicate:

- PHP logic
- Entity logic
- Relationship logic
- Verification logic
- HTML
- CSS
- Data models

### Separation

Keep:

    Data
    Application logic
    Components
    Templates
    Pages

separate.

### Extension

Improve existing systems before creating new parallel systems.

### Canonical Identity

Every entity must have one canonical Claraus identity.

Do not create duplicate identities for the same entity simply because it has multiple domains, profiles, or publications.

### Verification Independence

Verification must remain independent from editorial ranking and editorial judgment.

### Security

Never store passwords, private credentials, API keys, server credentials, or other production secrets in the public repository.

### Production Safety

Do not copy live production code into the public GitHub repository merely to document the architecture.

Use sanitized examples and architectural documentation where appropriate.

---

# 15. Future Domain Flow

The intended future experience is:

    1. Entity exists on Claraus
             |
             v
    2. Authorized user requests verification
             |
             v
    3. User submits domain
             |
             v
    4. Claraus provides verification instructions
             |
             v
    5. User proves domain ownership
             |
             v
    6. Claraus validates verification
             |
             v
    7. Domain becomes associated with entity
             |
             v
    8. Claraus enables available domain features
             |
             v
    9. User can use the domain as an entry point to
       the verified Claraus identity

This flow must remain compatible with future verification methods and future domain infrastructure.

---

# 16. What This Architecture Is Not

This system is not intended to:

- Replace Claraus profiles
- Turn domains into entities
- Automatically approve user claims
- Replace editorial review
- Replace rankings
- Create a separate profile database for verified users
- Duplicate the existing entity system
- Make Claraus dependent on one domain provider

The domain layer is an extension of the Claraus identity system.

---

# 17. Implementation Boundary

When implementation begins, developers must first inspect the existing Claraus architecture.

Before creating new files, inspect:

- Existing entity architecture
- Existing data architecture
- Existing relationship architecture
- Existing search system
- Existing rankings system
- Existing ACF fields
- Existing CPT structure
- Existing canonical URL logic
- Existing application loader
- Existing shared components

Do not assume that a new class, CPT, ACF group, database table, or service is required.

If an existing system can support the requirement, extend it.

---

# 18. Required Future Architecture

The eventual implementation should conceptually provide:

    Entity
       |
       +-- Identity
       |
       +-- Relationships
       |
       +-- Editorial Record
       |
       +-- Verification
       |
       +-- Domain Association
       |
       +-- Canonical URL
       |
       +-- Rankings
       |
       +-- Publications

The implementation details may evolve.

The architectural relationships and separation of responsibilities should not be weakened merely for convenience.

---

# 19. Final Direction

Claraus should be built as an authority infrastructure, not merely as a directory.

The core asset is the structured identity of the entity.

The profile is the public representation.

The relationships provide context.

The editorial record provides documentation.

The rankings provide structured recognition.

Verification establishes controlled ownership associations.

The domain becomes an entry point into that established identity.

Therefore:

**Do not build the domain feature first.**

**Build the identity system first.**

Then build verification.

Then associate domains.

Then introduce premium authority features.

Every future implementation decision should preserve this direction.
