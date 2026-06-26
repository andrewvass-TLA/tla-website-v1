# Website Copy Docs

Plain-text copy for each live marketing page on theloanatlas.com, extracted from the
source HTML in [`public/`](../../public/). One markdown file per page. Use these for copy
review, or drop a file into a Claude chat project to draft edits.

**How to keep these current:** these are generated from the page source. After copy
changes ship, regenerate the relevant file(s) rather than hand-editing here — the page
HTML in `public/` is the source of truth, these docs are a snapshot.

## Pages

| Page | Slug | Copy doc |
|---|---|---|
| Homepage | `/` | [index.md](index.md) |
| Pricing | `/pricing` | [pricing.md](pricing.md) |
| Sales — Individual | `/sales-individual` | [sales-individual.md](sales-individual.md) |
| Events | `/events` | [events.md](events.md) |
| Contact | `/contact` | [contact.md](contact.md) |
| Faculty | `/faculty` | [faculty.md](faculty.md) |
| Consultation | `/consultation` | [consultation.md](consultation.md) |
| Consultation — Corporate | `/consultation-corporate` | [consultation-corporate.md](consultation-corporate.md) |
| Consultation — Mastermind | `/consultation-mastermind` | [consultation-mastermind.md](consultation-mastermind.md) |
| Corporate | `/corporate` | [corporate.md](corporate.md) |
| What's Inside | `/whats-inside` | [whats-inside.md](whats-inside.md) |
| AI-Empowered Originator Masterplan | `/ai-originator-masterplan` | [ai-originator-masterplan.md](ai-originator-masterplan.md) |
| 5 Scripts | `/5-scripts` | [5-scripts.md](5-scripts.md) |
| Mastermind | `/mastermind` | [mastermind.md](mastermind.md) |
| Platinum Marketing | `/platinum-marketing` | [platinum-marketing.md](platinum-marketing.md) |

## Not included

- **Blog pages** (`blog`, `blog-archive`, `blog-post`) — currently template/mockup
  content, not finalized marketing copy.
- **Legal/utility pages** (`privacy-policy`, `terms-of-use`, `end-user-agreement`).
- **Experiments** (`hero-mockup*`, `patterns`) — not live.

## Notes worth knowing for review

A few pages have copy that lives outside plain HTML; it was captured but flagged in-file:

- **Embedded forms/calendars** (contact, consultation, consultation-corporate,
  consultation-mastermind, ai-originator-masterplan, 5-scripts) use third-party
  LeadConnector / GoHighLevel iframe embeds. Their field labels and submit-button text
  are **not** in our HTML, so those aren't in the docs — only the surrounding copy.
- **events.html** is template/sample content (placeholder coach names, 2026 dates), not
  real scheduled events.
- **JS-driven copy** — the homepage hero showcase, faculty bios/stats (modal data),
  mastermind hero chat demo, and several animated count-up stats are rendered from
  JavaScript rather than static HTML. This copy is captured and labeled where it appears.
- **whats-inside.md** includes in-mockup tool UI labels (sample dashboard text) under
  clearly-marked subsections — skip those if you're only reviewing persuasive copy.
- **consultation-mastermind** mixes a free-consultation booking flow with a paid
  Mastermind Summit 2026 upsell, despite its "Book a Free Consultation" page title.
