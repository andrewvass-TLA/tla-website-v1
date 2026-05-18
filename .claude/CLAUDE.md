# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Static marketing website for The Loan Atlas — a mortgage coaching and AI business system. Pure HTML/CSS/JS with no build system, package manager, or test framework. Open any HTML file directly in a browser to develop.

## Architecture

**Pages:** Each `.html` file is a standalone page sharing one stylesheet and one script:
- `index.html` — Homepage (hero, trust bar, features)
- `pricing.html` — Membership plans
- `sales-individual.html` — Sales page for individual borrowers
- `faculty.html` — Team/faculty profiles
- `consultation.html` — Consultation booking
- `events.html` — Events and masterclasses
- `whats-inside.html` — Product detail page

**Shared resources (referenced in every page):**
- `styles.css` — Single monolithic stylesheet (~3,100 lines). Design tokens (CSS custom properties) are defined at the top; component styles follow.
- `nav.js` — Mobile navigation toggle only (escape-key close + hamburger toggle).
- Google Fonts CDN — Manrope (headlines) and Inter (body).

**Assets:** All images live in `assets/`. Logos use `.png`/`.svg`/`.webp`; backgrounds use `.png`.

## Design System

Source of truth: [.claude/DESIGN.md](.claude/DESIGN.md)

**Colors:**
- Primary (Midnight Slate): `#021c36` — nav, headings, CTA backgrounds
- Brass: `#c9961c` / Brass-bright: `#eac25a` — accents, eyebrows, AI-identity moments
- Brass gradient: `linear-gradient(135deg, #c9961c 0%, #eac25a 50%, #ffd56c 100%)` — gold buttons, heading highlights
- Background: `#f7f9fb` | Surface: `#ffffff`

**Typography classes** (see DESIGN.md for full table):
- `.t-display` — Manrope 700, fluid clamp(2.25rem→3rem)
- `.t-headline-lg` / `.t-headline-md` — Manrope 600
- `.t-body-lg` / `.t-body` — Inter 400
- `.t-eyebrow` — Inter 600, uppercase, brass color
- `.t-muted` — sets `on-surface-variant` color · `.text-brass` — sets brass color

**Spacing:** 8px base — xs: 8px, sm: 16px, md: 24px, lg: 40px, xl: 64px

**Layout:** 1280px container, 24px gutter. Sections use `.section` (padding-block clamp(48px→96px)).

**Shape:** Default `--radius: 0.25rem`; cards `--radius-xl`/`--radius-2xl`; large containers `--radius-3xl: 1.5rem`.

**Dark sections:** Alternate between light (`--background`) and dark gradient sections. Standard dark: `linear-gradient(135deg, #0a1628, #131b2e, #1e293b)`. See DESIGN.md for all patterns.

## CSS Conventions

- CSS custom properties mirror the design tokens from DESIGN.md. Always use them rather than hardcoded hex values.
- Styles are organized component-by-component after the token block. Add new component styles at the end or in the relevant component section.
- Mobile-first responsive design; breakpoints are declared within component sections.
