# CLARAUS RANKINGS ARCHITECTURE

Version: 1.0

## Rankings Principles

Rankings are a dedicated Claraus platform system.

Ranking logic should remain separate from individual templates and editorial pages.

Rankings should use existing structured Claraus data rather than creating duplicate content systems.

Improve the existing rankings system before introducing another implementation.

---

## Rankings System

Rankings are loaded as part of the Claraus application architecture.

The rankings system is maintained independently so that ranking functionality can be developed without placing ranking logic directly inside page templates.

---

## Ranking Data

Rankings operate on structured Claraus content.

Where ranking records require information from existing entities, the existing structured data should be reused rather than duplicated.

---

## Ranking Presentation

Ranking templates are responsible for presenting ranking information.

The underlying ranking logic should remain outside the presentation layer.

Templates should assemble the ranking interface from the existing ranking and component systems.

---

## Ranking Architecture

The rankings system remains connected to the wider Claraus architecture while maintaining its own responsibilities.

It can therefore work alongside:

- Structured content
- Entity relationships
- Search
- Editorial content
- Reusable components
- Templates

---

## Development Rules

Do not duplicate ranking logic inside individual pages.

Do not duplicate structured entity data for rankings.

Do not place core ranking logic inside presentation templates.

Extend the existing ranking system when new ranking requirements are introduced.

---

## Rankings Objective

The rankings architecture provides a dedicated system for presenting structured rankings within Claraus while maintaining the separation between data, application logic, and presentation.