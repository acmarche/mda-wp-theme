# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a WordPress 6.8 installation for **Maison des Aînés de Marche-en-Famenne** - a community center for people 50+ in Belgium. The site uses the custom **mda-theme** Full Site Editing (FSE) theme.

## Commands

### WP-CLI
WP-CLI is available at `/usr/local/bin/wp`. Run commands from the project root:
```bash
wp theme list
wp plugin list
wp cache flush
wp rewrite flush
wp db export backup.sql
wp search-replace 'old-domain.com' 'new-domain.com' --dry-run
```

### Database
- SQL dump available at `mda2.sql` for reference/import
- Import: `wp db import mda2.sql`

## Architecture

### Active Theme: mda-theme (wp-content/themes/mda/)
Custom FSE block theme built for MDA. No build tools required.

```
mda/
├── assets/images/       # Theme images (logo.png)
├── parts/               # Template parts
│   ├── header.html      # Site header with logo and navigation
│   └── footer.html      # Footer with contact info
├── patterns/            # Block patterns
│   ├── intro.php        # Introduction section (orange background)
│   └── latest-posts.php # Latest posts grid
├── templates/           # Page templates
│   ├── front-page.html  # Homepage template
│   ├── index.html       # Blog archive
│   ├── page.html        # Standard page
│   ├── single.html      # Single post
│   ├── archive.html     # Category/tag archives
│   ├── search.html      # Search results
│   └── 404.html         # Not found page
├── functions.php        # Theme setup and enqueues
├── style.css            # Theme metadata + styles
└── theme.json           # Theme configuration
```

### Theme Colors (from logo)
Defined in `theme.json`:
- **Primary** (dark blue): `#1e3a7b` - Header, footer, headings
- **Secondary** (orange): `#f59e0b` - Intro background, accents
- **Accent** (yellow): `#fbbf24` - Highlights
- **Base** (white): `#ffffff`
- **Contrast** (dark): `#1a1a2e`

### Key Configuration Files
- **theme.json**: Colors, typography, spacing, block styles
- **parts/header.html**: Uses Navigation block ref=18 for menu
- **parts/footer.html**: Contact coordinates (Rue du Commerce, 16)

### Menu Structure
Navigation managed via wp_navigation post ID 18. Menu items:
- Activités, Cinéma, Programme du mois, Albums photos, Contact

### Homepage Setup
- `show_on_front`: page
- `page_on_front`: "Accueil" page
- `page_for_posts`: "Actualités" page

## Data Directory

The `/data` directory contains source assets:
- `logo-mda-hq.png` - Original logo (imported to media library)
- `intro.txt` - Introduction text
- Various excursion photos (imported as featured images)
