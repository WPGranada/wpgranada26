# WPGranada — AGENTS.md

Block theme (FSE) for the WordPress Granada community (wpgranada.es). Theme slug `wpgranada26`; text domain `wpgranada26` (as in `style.css`; function prefix `wpgranada26_`).
WordPress 6.5+, PHP 7.4+, `theme.json` v3. Code and comments in English; site content in Spanish.
Repo: `github.com/WPGranada/wpgranada26` (`origin`). Contributors work from forks; open PRs against `origin`.

## Source of truth

Follow the `close-wpdev-block-themes` skill (github.com/closemarketing/agent-skills). If it is not
installed, install it (`sh install.sh` in that repo) before editing. Older code in this repo is
not precedent — when it contradicts the skill, the skill wins.

## Before you say "done"

```bash
node ~/.claude/skills/close-wpdev-block-themes/scripts/close-theme-lint.mjs .
```

If `close-theme-lint.mjs` is missing from the installed skill, update the skill; do not skip the check silently. There is no `composer.json` or PHPUnit suite yet (see "Tests").

No new lint errors. Then check every touched template/pattern at 1440, 768 and 390 px (screenshot, no horizontal overflow).

## Structure

- `theme.json` — design system (palette, fonts, spacing, layout). Edit tokens here, not in CSS.
- `style.css` — theme header + minimal CSS only; enqueued in `functions.php`.
- `templates/` — `front-page`, `home`, `index`, `single`, `page`, `archive`, `search`, `404`.
- `parts/` — `header.html`, `footer.html`.
- `patterns/` — PHP patterns, category `wpgranada`: `hero-section`, `next-event`, `past-events`, `stats-section`, `channels-section`, `cta-speaker`, `reproductor-de-podcast`.
- `assets/fonts/` local `.woff2`; `assets/images/` static images.
- `docs/diseno-web.pen` — design file. Open only through the Pencil MCP, never read as text.
- `functions.php` — pattern category, `meetings` upcoming-events query filter, theme supports, stylesheet enqueue. Keep it small; new features go in `inc/`.

## Hard rules (enforced by the linter)

- No `letter-spacing`, no `!important`, no HTML `style=""`, no jQuery, no external fonts.
- Fonts local `.woff2` in `assets/fonts/`, declared in `theme.json` `fontFace`; never enqueued.
- Styling order: block attributes with presets → `theme.json` → semantic class → `style.css`.
- Carousels, counters, text marquees, sticky columns, lightbox, scroll animations: FrontBlocks `frbl*` attributes, not theme JS.
- `wideSize` (1440px) is the default section width; body text never below 17px.
- `front-page.html` is a shell (header part, `wp:post-content`, footer part); content lives in patterns.
- No hardcoded colors or sizes; use preset slugs (`var(--wp--preset--color--primary)`, `has-*-font-size`, spacing presets).

## Tests

No automated tests yet. If PHP logic grows (query filters, binding sources, dynamic blocks), add PHPUnit in `tests/Integration` for PHP logic only. Do **not** write tests that read `style.css`, JS or
pattern files and assert on their text — they break on every visual tweak and prove nothing about
the rendered page. Verify visual work with a screenshot instead.

## Project specifics

- Palette: `primary` (#3858E9), `primary-dark`, `primary-light`, `primary-muted`, `accent` (orange #F97316), `accent-light`, `base` (white), `background-light`, `contrast` (text), `secondary`, `tertiary`, `muted`. Gradients: `primary-gradient`, `community-gradient`.
- Fonts: Plus Jakarta Sans (`heading`, 700–800), Inter (`body`, 400–700). Sizes `x-small` → `colossal`, fluid.
- Spacing presets `10`–`100`; custom tokens in `settings.custom`: `borderRadius` (small/medium/large/pill) and `spacing.section`.
- CPT `meetings` comes from the `community-meetings` plugin; `wpgranada26_upcoming_meetings_query` shows only upcoming ones (publish + future, ASC). Do not register the CPT in the theme.
- Plugins: `community-meetings`, `gravityforms`, `contact-form-7`, `powerpress` (podcast pattern), `seo-by-rank-math`, Icon Block (channels pattern icons), FrontBlocks (`frbl*` effects).
- Key links: Meetup `meetup.com/es-es/granada-wordpress-meetup/`; internal pages `/ser-ponente/`, `/contacta/`.

## Known exceptions

- `!important` is allowed only when marked `close-lint-allow no-important` with a reason (e.g. core's navigation overlay or alignfull margins).

## Debt (to remove, not exceptions)

- `letter-spacing` in `style.css` (kicker, section label, hero title classes) — remove or get owner sign-off.
- `!important` in `style.css` (mobile padding overrides).
- `style=""` in `patterns/cta-speaker.php` (line-height, button radius/padding/weight) — move to block attributes or `theme.json`.
- `front-page.html` holds the whole homepage content (hero, activities, news, CTA) — move to patterns and leave the shell.
- Text marquee (`wpgranada-marquee`) — migrate to FrontBlocks.
- `theme.json` `medium` font size is 1rem (16px), below the 17px body minimum — raise it or map body text to `large`.
- `readme.md` documents an older palette (`contrast` #1e1e1e etc.) — sync with `theme.json`.
- `skills-lock.json` pins only `wp-block-development` and `wp-block-themes` — add `close-wpdev-block-themes`.
