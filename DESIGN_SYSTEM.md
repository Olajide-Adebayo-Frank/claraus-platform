# CLARAUS DESIGN SYSTEM

Version: 1.0

## Design Principles

Editorial First.

Readable before decorative.

Minimal.

Premium.

Timeless.

The interface should support the content rather than compete with it.

---

## Styling Structure

Claraus separates global styling from page-specific styling.

Global rules belong in the shared stylesheet.

Shared entity patterns belong in the entity stylesheet.

Page-specific requirements remain within their respective stylesheets.

---

## Global Styles

`claraus.css`

Contains the shared visual foundation:

- Variables
- Typography
- Layout
- Containers
- Utilities
- Global spacing
- Global buttons
- Shared components

Global styles should be used wherever the same visual rule applies across the platform.

---

## Entity Styles

`entity.css`

Contains shared entity presentation:

- Entity components
- Entity metadata
- Entity cards
- Shared entity layouts

Entity styling should remain reusable across different entity types.

---

## Page Styles

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

Page-specific styles should not duplicate styles already available through the global or shared systems.

---

## Components

Components should be designed for reuse.

When the same interface pattern appears in more than one location, it should be moved into the shared component system rather than recreated.

---

## CSS Rules

Never duplicate CSS.

Do not introduce page-specific styling when an existing shared rule is sufficient.

Keep global styles global.

Keep shared entity styles reusable.

Keep page-specific styles limited to genuine page requirements.

---

## Design Objective

The Claraus design system provides a consistent visual foundation across the platform while allowing individual content types to maintain their own presentation requirements.

The system is designed to remain minimal, readable, reusable, and maintainable as Claraus grows.