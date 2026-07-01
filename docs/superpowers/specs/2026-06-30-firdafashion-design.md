# HayyaFashion — Boutique Website Design Spec

## Overview
Full-stack Laravel 12 boutique website for HayyaFashion, a sewing and fashion service. Single-page layout with navigation-anchored sections: Hero, Layanan, Gallery Jahit, Tentang Kami, Kontak.

## Stack
- Backend: Laravel 12
- Frontend: Blade + Livewire + Tailwind CSS v4
- Auth: Laravel Fortify
- Icons: Heroicons SVG

## Design System

### Style
Exaggerated Minimalism — bold minimalism, oversized typography, high contrast, negative space, editorial layout befitting a high-end butik.

### Color Palette
| Role       | Hex       | Usage                  |
|------------|-----------|------------------------|
| Primary    | `#BE185D` | Headings, CTA buttons  |
| Secondary  | `#EC4899` | Hover states, accents  |
| Accent     | `#D97706` | Gold highlights        |
| Background | `#FDF2F8` | Page background        |
| Foreground | `#0F172A` | Body text              |
| Muted      | `#FBF1F5` | Cards, subtle sections |
| Border     | `#F7E3EB` | Dividers, strokes      |

### Typography
- **Headings:** Cormorant (serif) — weights 400-700
- **Body:** Montserrat (sans-serif) — weights 300-700
- **Scale:** 14 / 16 / 18 / 24 / 32 / 48 / 64 / 80

### Layout
- Max-width container: 1280px
- Sections separated by generous whitespace
- Mobile-first responsive (375px / 768px / 1024px / 1440px)
- Sticky nav header

## Page Sections

### Navigation
- Sticky top navbar with HayyaFashion logo (left) and links (right):
  - Home / Layanan / Gallery Jahit / Tentang Kami / Kontak
- Mobile: hamburger menu with slide-out drawer
- Active section highlighted with primary color

### Hero
- Left: Brand name "Hayya Modiste" (Cormorant, oversized)
- Slogan: "Esensi dari Sebuah Gaya"
- Description paragraph about sewing services
- Two CTAs: "Gallery Jahit" (primary) and "Hubungi Kami" (outline)
- Right: Full-height model photo (placeholder via UI Avatars / Picsum)

### Layanan (Services)
- Three service cards with icons:
  1. **Jahit** — Sewing services
  2. **Pembuatan Pola** — Pattern making
  3. **Garansi Revisi** — Free revision guarantee
- Boutique-style card design with subtle shadows and rose accents

### Gallery Jahit (Gallery)
- Responsive grid of product photos (placeholder images)
- Hover overlay effect showing project name
- Filter by category (optional)

### Tentang Kami (About)
- Two-column layout: text left, logo/image right
- Company story and values
- Logo placeholder via UI Avatars

### Kontak (Contact)
- Left: heading "Diskusikan Kebutuhan Menjahit Anda Dengan Kami"
- Description paragraph
- Contact details: Email, WhatsApp, Facebook
- Right: Form that sends to WhatsApp (name, message → wa.me link)

### Footer
- Copyright, social links, back-to-top

## Routes
| Route | Method | Page |
|-------|--------|------|
| `/` | GET | Home (all sections) |

## Components (Blade)
- `layouts/app.blade.php` — Main layout
- `components/navbar.blade.php` — Navigation
- `components/hero.blade.php` — Hero section
- `components/layanan.blade.php` — Services
- `components/gallery.blade.php` — Gallery
- `components/tentang.blade.php` — About
- `components/kontak.blade.php` — Contact with form
- `components/footer.blade.php` — Footer
