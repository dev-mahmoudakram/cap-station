# CLAUDE.md — CapStation Project Instructions

You are building a premium Arabic-first landing website for **CapStation**, a rebrand/rebuild of the current Fazza website.

## Product understanding

CapStation is a Saudi/Gulf-focused platform for captains/drivers. It helps drivers connect with transport/delivery opportunities, improve income, manage their work journey, and access helpful services through a modern digital platform.

The website is not a basic brochure. It should feel like a premium tech startup website for mobility, logistics, driver enablement, and smart operations.

## Hard technical requirements

- Use Laravel 13.
- Use Blade, Laravel routing, controllers, config files, and localization.
- Use Bootstrap, not Tailwind.
- Use SCSS, not plain CSS only.
- Use Vite for assets.
- Use Arabic as the default language.
- Add English localization.
- Support RTL for Arabic and LTR for English.
- Use GSAP and ScrollTrigger for interactive animations.
- Build reusable Blade components.
- Keep code clean, maintainable, and scalable.
- Follow Laravel conventions.
- Do not over-engineer with unnecessary packages.

## Visual requirements

- Use the uploaded CapStation logo and extract the brand direction from it.
- Main colors:
  - Green: `#007038`
  - Dark green: `#005F2E`
  - Light green: `#009A4B`
  - Gold: `#D8A301`
  - Black: `#050807`
  - Cream: `#FFF8E6`
- The design must be premium, clean, smooth, responsive, and Saudi-market suitable.
- Use transport visuals: captain, road, car, route, city, map, growth, dashboard, wallet, service network.
- Do not make it look like a generic template.

## Interaction direction

Create memorable interactive sections:
- Hero section with animated car/route visual.
- On scroll, the car should move along a road or path.
- Use subtle parallax in the hero background.
- Use animated counters for stats.
- Use service cards with small hover motion.
- Use a driver journey timeline that animates on scroll.
- Add CTA sections with premium gradients.
- Respect `prefers-reduced-motion`.

## Pages / sections

For the first version, build a strong landing page with:
1. Header / navbar with language switcher.
2. Hero section with animated car/road visual.
3. Problem section: captains lose time switching between platforms and opportunities.
4. Solution section: CapStation brings opportunities and services into one place.
5. How it works.
6. Features for captains.
7. Features for companies/partners.
8. Driver journey timeline.
9. App/dashboard mockup area.
10. Statistics section.
11. Testimonials / trust section.
12. FAQ.
13. Final CTA.
14. Footer.

## Content rules

- Arabic text must sound natural, premium, and localized for Saudi/Gulf users.
- Avoid robotic translation.
- English should be clear and concise.
- The tone is confident, supportive, professional, and modern.

## Development workflow

Work in phases:
1. Setup localization, Bootstrap, SCSS, GSAP.
2. Build layout and design system.
3. Build Blade components.
4. Build landing sections.
5. Add animations.
6. Add responsive and RTL fixes.
7. Add SEO and performance polish.
8. Run final QA.

After each phase, explain what changed and what files were modified.
