# CLARAUS PLATFORM ARCHITECTURE

Version: 1.0

## Architecture Principles

Every component must be reusable.

Never duplicate HTML.

Never duplicate CSS.

Never duplicate PHP logic.

Improve existing systems instead of replacing them.

If code is useful in more than one place,
move it into the shared system.

---

## Platform Structure

Foundation
↓

Application
↓

Data
↓

Components
↓

Templates
↓

Pages

---

## Application

The Claraus application is bootstrapped through the core application layer.

The Kernel starts the application.

The Loader loads the Claraus modules.

The core bootstrap connects the application to the platform's primary systems, including data, entity relationships, search, rankings, homepage data, and shared application components.

The application layer is responsible for initialization and system loading. Domain and presentation concerns remain separated from the bootstrap layer.

---

## Data

`inc/`

Contains the Claraus data systems.

Data is kept separate from presentation so that the same structured information can be used across different parts of the platform without duplicating logic.

Core content domains include:

- Entities
- Founders
- Companies
- Executives
- Insights

---

## Entity Relationships

Claraus is built around connected entities rather than isolated content.

Founders, companies, executives, and editorial content can be related and reused across the platform.

Relationships belong to the application/data architecture and should not be recreated inside individual templates.

---

## Search

Search is maintained as a dedicated platform system.

The search architecture is separated into:

- Search functions
- Search query
- Search results
- Search interface

Search logic remains independent from individual templates so that the same search system can be used throughout Claraus.

---

## Rankings

Rankings are maintained as a dedicated platform system.

Ranking functionality is loaded through the Claraus application architecture rather than being embedded directly into individual pages.

---

## Components

`template-parts/`

Contains presentation components.

Components are responsible for presentation only.

Reusable components should be created once and used wherever the same interface or content pattern is required.

---

## Templates

`single-*.php`

Single templates assemble existing Claraus components.

Templates should not contain duplicated business logic.

Archive templates handle collection-level presentation and should rely on existing application and component systems.

---

## Styling

`claraus.css`

- Variables
- Typography
- Layout
- Containers
- Utilities
- Global spacing
- Global buttons
- Shared components

`entity.css`

- Shared entity components
- Entity metadata
- Entity cards
- Shared entity layouts

`homepage.css`

Homepage-specific styling.

`founder.css`

Founder-specific styling.

`company.css`

Company-specific styling.

`executive.css`

Executive-specific styling.

`article.css`

Editorial article-specific styling.

Global styles remain global.

Page-specific styles remain page-specific.

Shared components should not be restyled independently on individual pages.

---

## Editorial Direction

Editorial First.

Readable before decorative.

Minimal.

Premium.

Timeless.

The interface should support the information before adding decoration.

---

## Development Rules

Do not duplicate an existing system.

Do not create page-specific logic when an existing shared system can handle it.

Do not duplicate markup for components that already exist.

Do not duplicate styling that belongs in the global or shared stylesheet.

Extend existing architecture before introducing another implementation.

Keep data, application logic, presentation components, templates, and pages in their respective layers.

---

## Architectural Objective

Claraus is designed as a reusable editorial platform.

The architecture allows the platform to expand through additional entities, editorial content, rankings, relationships, and features without requiring the same logic or interface to be rebuilt in multiple places.