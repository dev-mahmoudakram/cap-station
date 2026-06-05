# Skill: CapStation Laravel Architecture

Use this skill whenever you modify Laravel routes, controllers, localization, Blade layouts, components, assets, or project structure.

## Stack rules

- Laravel 13.
- Blade components.
- Bootstrap.
- SCSS.
- Vite.
- No Tailwind.
- Arabic default, English secondary.
- Clean Laravel conventions.

## Preferred structure

```txt
resources/views/layouts/app.blade.php
resources/views/pages/home.blade.php
resources/views/components/*.blade.php
resources/scss/app.scss
resources/scss/abstracts/_variables.scss
resources/scss/base/_base.scss
resources/scss/base/_rtl.scss
resources/scss/components/*.scss
resources/scss/pages/_home.scss
resources/js/app.js
resources/js/modules/animations.js
resources/js/modules/counters.js
lang/ar/site.php
lang/en/site.php
routes/web.php
```

## Routing

Use named routes. Add localization support.

Preferred route pattern:
- `/` redirects to `/ar` or uses default Arabic.
- `/{locale}` displays the localized homepage.
- Locale must be one of `ar`, `en`.

Example logic:
- If no locale is provided, default to Arabic.
- Store selected locale in session if needed.
- Set app locale in middleware.
- Set `<html lang="ar" dir="rtl">` or `<html lang="en" dir="ltr">`.

## Blade rules

- Keep layout generic.
- Use components for repeated patterns:
  - navbar
  - footer
  - section heading
  - feature card
  - stat card
  - FAQ accordion
  - CTA
  - hero visual
- Keep large content in `lang/*/site.php`.
- Do not hardcode all Arabic copy directly in Blade.

## Config

Create or use a simple config if useful:

```php
return [
    'supported_locales' => ['ar', 'en'],
    'default_locale' => 'ar',
];
```

## Controllers

For a landing page, do not overcomplicate. A simple `HomeController` or closure route is enough unless more pages are added.

## Assets

Use Vite:
- SCSS entry: `resources/scss/app.scss`
- JS entry: `resources/js/app.js`

Import Bootstrap and GSAP in the right place.

## Quality

- Follow PSR standards.
- Keep components small.
- Use semantic names.
- Avoid huge monolithic files.
- Prefer clear simple architecture over unnecessary abstractions.
