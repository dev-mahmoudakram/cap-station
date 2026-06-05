# Skill: CapStation Frontend UI with Bootstrap + SCSS

Use this skill whenever building UI, SCSS, layout, responsive behavior, components, or visual polish.

## Mandatory stack

- Bootstrap only for grid/utilities/components.
- Custom SCSS for brand look.
- No Tailwind.

## SCSS architecture

Use a modular SCSS structure:

```txt
resources/scss/
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
    _sections.scss
    _animations.scss
  pages/
    _home.scss
```

## Bootstrap customization

Customize Bootstrap variables before importing Bootstrap where possible:
- primary color
- border radius
- body font
- headings color
- container widths
- button radius

## Layout rules

- Use `container` and `container-fluid` intentionally.
- Hero should be visually rich but not overcrowded.
- Use large spacing on desktop.
- Reduce spacing on mobile.
- Keep CTA visible above the fold.

## Responsive rules

Breakpoints:
- Mobile: simple hero visual, less motion.
- Tablet: stacked content.
- Desktop: split hero with content and animated visual.
- Large desktop: keep content width controlled; do not stretch text too wide.

## RTL rules

- Use logical CSS properties where possible:
  - `margin-inline-start`
  - `padding-inline-end`
  - `inset-inline-start`
- Avoid hardcoded left/right unless necessary.
- Check navbar, buttons, icons, offcanvas, and hero visual in Arabic.

## UI components

Build:
- Premium button styles.
- Feature cards.
- Stat cards.
- Timeline items.
- Mock dashboard/phone UI.
- FAQ accordion styling.
- CTA block.

## Visual patterns

Use:
- road curves
- route dots
- glass cards
- dark green gradients
- small gold highlights
- map grid backgrounds
- subtle shadows
- animated route line

Avoid:
- generic stock template sections
- too many icons with no meaning
- aggressive animation
- low contrast text
