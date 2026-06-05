# MASTER PROMPT FOR CLAUDE CODE — Build CapStation Website

You are Claude Code working inside my Laravel project. I want you to rebuild and rebrand the current Fazza-style website into a premium, interactive, Arabic-first website for the new brand **CapStation**.

## Project goal

Build a modern landing website for CapStation, a Saudi/Gulf-focused platform for captains/drivers. The platform helps captains access opportunities, increase income, manage their journey, and connect with mobility/delivery services through one professional digital platform.

This is a rebranding and rebuild project. The website should not look generic. It should look like a serious premium tech startup in mobility/logistics.

## Stack

Use only:

- Laravel 13
- Blade components
- Bootstrap
- SCSS
- Vite
- GSAP + ScrollTrigger for animations
- Vanilla JavaScript only when needed
- Arabic default language
- English secondary language

Do **not** use Tailwind.

## Brand identity

Use the new CapStation logo located in the project assets.

Build the design around this palette:

```scss
$brand-primary: #007038;
$brand-primary-dark: #005F2E;
$brand-primary-deep: #003E21;
$brand-primary-light: #009A4B;
$brand-secondary: #D8A301;
$brand-secondary-dark: #B78300;
$brand-olive: #629C2D;
$brand-black: #050807;
$brand-white: #FFFFFF;
$brand-cream: #FFF8E6;
$brand-muted: #6B7280;
$brand-border: rgba($brand-primary, 0.14);
```

Visual feeling:
- Premium
- Saudi/Gulf market suitable
- Clean and modern
- Trustworthy
- Driver-first
- Technology and smart mobility focused
- Inspired by roads, routes, captains, maps, city growth, and motion

## Website language

Arabic is the main language. English is secondary.

Requirements:
- Default locale: `ar`
- Add route prefix or middleware for locale switching.
- HTML direction must change automatically:
  - Arabic: `dir="rtl"`
  - English: `dir="ltr"`
- Use Laravel language files:
  - `lang/ar/site.php`
  - `lang/en/site.php`
- Add a clean language switcher in the navbar.
- Make Arabic copy high quality, not literal translation.

## Required landing page sections

Build the homepage with these sections:

### 1. Header / Navbar

- Logo on the correct side based on direction.
- Links:
  - الرئيسية
  - كيف يعمل
  - المزايا
  - للشركات
  - الأسئلة الشائعة
- CTA button:
  - Arabic: `انضم ككابتن`
  - English: `Join as Captain`
- Language switcher.
- Mobile menu using Bootstrap offcanvas or collapse.
- Sticky header with blur/glass effect after scroll.

### 2. Hero section

This is the most important section.

Make it visually impressive and interactive.

Content idea Arabic:
- Eyebrow: `منصة تشغيل ذكية للكباتن`
- Main headline: `محطتك الأولى لفرص أكثر ودخل أفضل`
- Paragraph: `كاب ستيشن تجمع للكابتن فرص التشغيل والخدمات المساندة في تجربة واحدة ذكية تساعده يتحرك أسرع، يختار أفضل، ويزيد دخله بثقة.`
- CTAs:
  - `ابدأ الآن`
  - `اكتشف كيف تعمل`

Hero visual:
- Animated road / route line.
- Car or captain vehicle moving along the road.
- City / dashboard / route map elements in the background.
- On page scroll, the car should move with the user along the road/path.
- Use GSAP ScrollTrigger for this.
- Keep it smooth, lightweight, and responsive.
- On mobile, simplify the animation.

### 3. Problem section

Explain the problem captains face:
- Too many apps and scattered opportunities.
- Wasted time searching for suitable trips.
- Difficulty knowing demand areas.
- Limited visibility on income and performance.

### 4. Solution section

Explain how CapStation solves it:
- One place for opportunities and driver support.
- Smart recommendations.
- Better route awareness.
- Wallet/income visibility.
- Support and useful services.

### 5. How it works

Three or four steps:
1. Register as captain.
2. Complete profile and service preferences.
3. Receive suitable opportunities.
4. Track income and improve performance.

Make cards interactive with hover motion.

### 6. Features for captains

Feature cards:
- More suitable opportunities.
- Smart routes.
- Demand area insights.
- Wallet and earnings tracking.
- Maintenance reminders.
- Support.
- Rewards.

### 7. Features for companies / partners

CapStation also supports companies that need captains or operations:
- Access to captain network.
- Better operational visibility.
- Faster onboarding.
- Smarter matching.
- Reporting and quality control.

### 8. Driver journey timeline

Create a horizontal/vertical timeline:
`تسجيل` → `تفعيل` → `استقبال فرص` → `تنفيذ` → `تحصيل` → `نمو`

Animate timeline progress on scroll.

### 9. App / dashboard mockup

Create a beautiful mockup section using CSS/HTML cards:
- Phone mockup or dashboard panel.
- Shows route, wallet, active opportunities, rating, and support.
- Do not depend on real screenshots.
- Use glassmorphism lightly, not too much.

### 10. Statistics section

Use counters:
- `+10K` Captains
- `+250K` Opportunities
- `+24/7` Support
- `+15` Cities

Use placeholder numbers for now, and put a comment that numbers should be replaced with real business data.

### 11. Testimonials / trust

Create 2–3 testimonial cards in Arabic:
- Captains talking about time saving, better opportunities, clearer income.
Make it polished and realistic.

### 12. FAQ

Use Bootstrap accordion.
Arabic FAQs:
- ما هي كاب ستيشن؟
- هل كاب ستيشن تطبيق توصيل؟
- كيف أبدأ ككابتن؟
- هل توجد رسوم؟
- هل المنصة متاحة في كل المدن؟
- كيف يتم التواصل مع الدعم؟

### 13. Final CTA

Strong CTA:
`جاهز تبدأ رحلتك مع كاب ستيشن؟`
Buttons:
- `انضم الآن`
- `تواصل معنا`

### 14. Footer

Include:
- Logo
- Short description
- Links
- Contact placeholder
- Social icons placeholders
- Copyright

## Animation requirements

Install and use GSAP with ScrollTrigger.

Implement:
- Hero car/path scroll animation.
- Header state change on scroll.
- Fade-up reveal animations.
- Counter animation.
- Timeline progress animation.
- Subtle card hover interactions.

Important:
- Check `prefers-reduced-motion`.
- Disable or simplify complex animations on mobile.
- Do not create animations that hurt performance.
- Use transforms and opacity, not layout-heavy animations.
- Use `will-change` only where necessary.

## Suggested file structure

Use or create:

```txt
resources/
  views/
    layouts/
      app.blade.php
    pages/
      home.blade.php
    components/
      navbar.blade.php
      footer.blade.php
      section-heading.blade.php
      feature-card.blade.php
      stat-card.blade.php
      faq-accordion.blade.php
      cta-section.blade.php
      hero-visual.blade.php
  scss/
    app.scss
    abstracts/
      _variables.scss
      _mixins.scss
    base/
      _base.scss
      _typography.scss
      _rtl.scss
    components/
      _navbar.scss
      _buttons.scss
      _cards.scss
      _hero.scss
      _animations.scss
    pages/
      _home.scss
  js/
    app.js
    modules/
      animations.js
      counters.js
      language-direction.js
lang/
  ar/
    site.php
  en/
    site.php
routes/
  web.php
```

## Code quality

- Use Blade components for repeated UI.
- Keep SCSS modular.
- Do not write all styles in one huge file.
- Use semantic HTML.
- Use accessible buttons, links, labels, and headings.
- Use Laravel route names.
- Keep content in language files as much as possible.
- Avoid hardcoding all text inside Blade.
- Add comments only when useful.

## SEO

Add:
- Dynamic title and meta description.
- Open Graph tags.
- Twitter card tags.
- Canonical URL.
- JSON-LD organization schema.
- Proper heading hierarchy.
- Arabic default metadata.
- English metadata for English locale.

## Performance

- Use SVG/CSS shapes where possible.
- Avoid huge images.
- Lazy-load non-critical images.
- Use Vite bundling.
- Keep animations performant.
- Do not load unnecessary libraries except Bootstrap and GSAP.

## Accessibility

- Respect contrast.
- Make navigation keyboard-friendly.
- Add `aria-label` to icon buttons.
- Use `prefers-reduced-motion`.
- Ensure FAQ accordion is accessible.
- Ensure mobile menu is usable.

## Deliverables

Implement the first production-ready landing page version.

After finishing, provide:
1. Files changed.
2. Packages installed.
3. How to run locally.
4. Notes about replacing placeholder stats/content.
5. QA checklist.

## Work method

Do not try to do everything in one messy change.

Work in phases:

### Phase 1
Set up Bootstrap, SCSS, GSAP, localization, routing, layout.

### Phase 2
Build the design system, variables, base styles, navbar, footer.

### Phase 3
Build homepage sections with Blade components and language files.

### Phase 4
Add GSAP animations and scroll interactions.

### Phase 5
Add responsive, RTL/LTR polish, SEO, accessibility, and performance improvements.

Before editing, inspect the current project structure. Then propose the implementation plan and start with Phase 1.
