# Skill: CapStation Animations and Interactions

Use this skill whenever implementing GSAP, ScrollTrigger, scroll animations, hero visual motion, counters, or interactive effects.

## Libraries

Use:
- GSAP
- ScrollTrigger

Avoid heavy animation libraries unless explicitly requested.

## Main animation concept

The website should have a signature motion: a car/vehicle/route visual in the hero that moves with the user's scroll.

Possible implementation:
- Use an inline SVG road/path.
- Place a small SVG car or vehicle element on the path.
- Use GSAP MotionPathPlugin only if available/installed; otherwise animate x/y/rotation along a simpler path.
- Use ScrollTrigger to link progress to scroll.
- On mobile, simplify to a smaller loop or static route.

## Required animations

1. Header state change on scroll.
2. Hero car or route movement.
3. Reveal sections with fade-up.
4. Cards subtle stagger.
5. Counter number animation.
6. Timeline progress on scroll.
7. CTA glow/route accent.

## Performance rules

- Animate `transform` and `opacity`.
- Avoid animating width/height/top/left when possible.
- Use `will-change` carefully.
- Clean up ScrollTriggers if using component-based JS.
- Do not create huge DOM or SVG complexity.

## Accessibility

Always respect reduced motion:

```js
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
if (prefersReducedMotion) {
  // Disable complex animations
}
```

## Suggested JS modules

```txt
resources/js/modules/animations.js
resources/js/modules/counters.js
```

## Animation quality rules

- Smooth and subtle, not cartoonish.
- Do not make elements jump.
- Duration should feel premium.
- Use stagger for grouped cards.
- Do not animate every small element.
- Keep mobile fast and clean.

## Example animation plan

Hero:
- Road line draws in.
- Car enters from side.
- Car moves along path as the user scrolls from hero to next section.
- City/cards in hero have subtle parallax.

Sections:
- Add `[data-animate="fade-up"]` attributes.
- GSAP reveals elements when entering viewport.

Counters:
- Use data attributes:
  - `data-counter`
  - `data-target="10000"`
