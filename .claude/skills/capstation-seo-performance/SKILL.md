# Skill: CapStation SEO, Performance, and Accessibility

Use this skill whenever improving metadata, structured data, performance, semantic HTML, accessibility, or final polish.

## SEO goals

CapStation should be discoverable as:
- Saudi/Gulf captain platform.
- Driver opportunities platform.
- Mobility and delivery captain support.
- Smart operation platform for captains and companies.

## Metadata

Add:
- `<title>`
- Meta description
- Canonical URL
- Open Graph title/description/image
- Twitter card
- Locale-aware metadata
- Organization JSON-LD

## Heading structure

- One H1 only in hero.
- H2 for major sections.
- H3 for cards/subsections.

## Performance

- Use Vite.
- Minimize dependencies.
- Use SVG/CSS visuals instead of huge images where possible.
- Lazy-load non-critical images.
- Keep GSAP animations efficient.
- Avoid layout shift.
- Use explicit dimensions for images.
- Compress logo/images.

## Accessibility

- Proper button/link semantics.
- Keyboard accessible navbar/offcanvas.
- `aria-label` for icon-only buttons.
- Sufficient contrast.
- Respect `prefers-reduced-motion`.
- FAQ accordion accessible via Bootstrap.
- Forms should have labels when added later.

## Responsive QA

Test:
- 360px mobile
- 390px mobile
- 768px tablet
- 1024px laptop
- 1440px desktop

Check:
- Hero not broken.
- Car animation does not overflow.
- Navbar works.
- Text readable.
- Buttons tappable.
- No horizontal scroll in RTL.
