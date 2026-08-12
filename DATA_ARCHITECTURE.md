# CLARAUS DATA ARCHITECTURE

Version: 1.0

## Data Principles

Claraus data is structured before it is presented.

Data should remain independent of presentation.

The same structured data should be reusable across different parts of the platform.

Do not place data logic inside presentation templates.

Improve existing data systems before creating another implementation.

---

## Core Data Domains

Claraus is organized around structured editorial entities.

Primary content domains include:

- Companies
- Founders
- Executives
- Insights

Each domain has its own data requirements while remaining part of the wider Claraus content architecture.

---

## Structured Content

Claraus uses structured content fields to maintain consistent information across profiles and editorial records.

Structured fields allow information to be stored independently from how it is displayed.

This keeps profile data reusable across:

- Single pages
- Archives
- Search
- Related content
- Rankings
- Entity relationships
- Editorial components

---

## Taxonomies

Taxonomies provide controlled classification for structured Claraus content.

They allow content to be grouped and discovered without embedding classification directly into presentation logic.

Taxonomy structure should remain reusable across the platform.

---

## Entity Data

Entity data represents the structured information attached to Claraus profiles and records.

Entity information should be maintained at the data layer and consumed by the presentation layer.

Templates should retrieve and display the data rather than define the data itself.

---

## Relationships

Structured entities are not treated as isolated records.

Where a relationship exists between Claraus entities, that relationship should be maintained through the platform's relationship system rather than duplicated inside individual templates.

This allows connected information to be reused throughout the platform.

---

## Data and Presentation

`inc/`

Contains the Claraus data systems.

`template-parts/`

Contains presentation components.

`single-*.php`

Assembles existing data and presentation components.

The responsibility of each layer remains separate.

Data belongs to the data layer.

Presentation belongs to components and templates.

---

## Data Objective

The data architecture is designed to keep Claraus structured, reusable, and extensible as new entities, classifications, relationships, and editorial requirements are introduced.