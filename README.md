# H2 Supply - WordPress Block Theme

Et moderne Block Theme for hydrogen-industrien, utviklet for H2 Supply.

![WordPress Version](https://img.shields.io/badge/WordPress-%3E%3D%205.9-blue)
![PHP Version](https://img.shields.io/badge/PHP-%3E%3D%207.4-green)
![License](https://img.shields.io/badge/License-GPL%20v2-orange)

## 🎨 Design

- **Primærfarge:** #2baee4 (H2 Supply blå)
- **Font:** Inter (Google Fonts)
- **Stil:** Moderne, industriell, profesjonell
- **Layout:** Full Site Editing (FSE)

## 🚀 Funksjoner

### Block Theme (FSE)
- Full støtte for Site Editor
- Global stil via `theme.json`
- Egendefinerte farger og typografi
- Responsive design

### Custom Post Type: Prosjekter
- Egne prosjektsider
- Felter: Kunde, Lokasjon, År, H2 Kapasitet, Bildegalleri
- Arkiv-side med grid-visning

### Patterns (Gjenbrukbare blokker)
1. **Hero Hydrogen** - Stor hero-seksjon med CTA
2. **Features Grid** - 4-kolonne funksjoner med ikoner
3. **About Company** - Om-selskapet med statistikk
4. **CTA Contact** - Call-to-action seksjon
5. **Project Card** - Prosjekt-kort for arkiv

### ACF Integrasjon
Klar for Advanced Custom Fields med følgende felt:
- Kunde (tekst)
- Lokasjon (tekst)
- År (nummer)
- H2 Kapasitet (tekst)
- Bildegalleri (gallery)

## 📁 Filstruktur

```
h2supply-theme/
├── style.css                 # Theme header
├── theme.json               # Globale innstillinger
├── functions.php            # CPT, ACF, assets
├── readme.txt               # WordPress.org readme
├── README.md                # Denne filen
├── templates/               # HTML-templates
│   ├── index.html
│   ├── single.html
│   ├── page.html
│   ├── archive.html
│   ├── search.html
│   └── 404.html
├── parts/                   # Template parts
│   ├── header.html
│   └── footer.html
├── patterns/                # Block patterns
│   ├── hero-hydrogen.php
│   ├── features-grid.php
│   ├── about-company.php
│   ├── cta-contact.php
│   └── project-card.php
└── assets/                  # Bilder, CSS, JS
    ├── css/
    ├── images/
    └── icons/
```

## 🛠️ Installasjon

### 1. Last ned
```bash
git clone https://github.com/bobcodebuilderai/h2supply-theme.git
```

### 2. Installer
- Last opp mappen til `/wp-content/themes/`
- Aktiver temaet i WordPress admin

### 3. Konfigurer
- Last opp logo i Site Editor → Header
- Konfigurer meny i Appearance → Navigation
- Legg til innhold på sidene

## 🎨 Tilpasning

### Site Editor
Gå til **Appearance → Editor** for å tilpasse:
- Globale stiler (farger, typografi)
- Header og footer
- Templates

### theme.json
Rediger `theme.json` for å endre:
- Fargepalett
- Font-størrelser
- Spacing (padding/margin)

### Farger
Primærfargen er satt til `#2baee4` i theme.json. Endre denne for å tilpasse til ditt brand.

## 🔌 Anbefalte plugins

- **Advanced Custom Fields (ACF)** - For prosjektfeltene
- **Yoast SEO** - For søkemotoroptimalisering
- **WPForms** - For kontaktskjema

## 📝 Bruk

### Legge til prosjekt
1. Gå til **Prosjekter → Legg til nytt**
2. Fyll inn tittel og innhold
3. Legg til prosjektdetaljer (kunde, lokasjon, etc.)
4. Last opp bilde(r)
5. Publiser

### Bruke patterns
1. I Gutenberg, klikk på **Patterns**
2. Velg kategori **H2 Supply**
3. Velg pattern og sett inn

## 🐛 Support

For spørsmål eller support, kontakt:
- E-post: info@h2supply.no

## 📄 Lisens

GPL v2 eller senere

## 🙏 Credits

- Basert på Twenty Twenty-Four struktur
- Ikoner: Emoji (innebygget)
- Font: Inter av Google Fonts

---

**Versjon:** 1.0.0  
**Sist oppdatert:** Mars 2026
