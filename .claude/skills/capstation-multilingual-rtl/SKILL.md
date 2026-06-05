# Skill: CapStation Multilingual Arabic RTL

Use this skill whenever working on localization, Arabic/English copy, RTL/LTR layouts, route locale, language switcher, or translated content.

## Language rules

- Arabic is default.
- English is secondary.
- Arabic copy must be natural and premium.
- Do not use robotic literal translation.

## Locale behavior

Supported locales:
- `ar`
- `en`

Direction:
- `ar` → `rtl`
- `en` → `ltr`

Set on HTML:
```blade
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
```

## Content files

Use:
```txt
lang/ar/site.php
lang/en/site.php
```

Suggested keys:
- `meta`
- `nav`
- `hero`
- `problem`
- `solution`
- `how_it_works`
- `features`
- `partners`
- `journey`
- `stats`
- `testimonials`
- `faq`
- `cta`
- `footer`

## Arabic tone

Use Saudi/Gulf-friendly Arabic:
- Clear
- Confident
- Professional
- Warm
- Direct

Avoid:
- Overly Egyptian slang.
- Overly formal government language.
- Weak generic marketing phrases.
- Literal English sentence structure.

## Sample Arabic style

Good:
`كاب ستيشن تجمع للكابتن فرص التشغيل والخدمات المساندة في تجربة واحدة ذكية تساعده يتحرك أسرع، يختار أفضل، ويزيد دخله بثقة.`

Avoid:
`نحن نقدم حلول مبتكرة لتعزيز تجربة المستخدمين في مجال النقل.`

## UI considerations

- Make navbar alignment correct in RTL.
- Check icons that imply direction.
- Flip arrows where needed.
- Use logical CSS properties.
- Test mobile menu in Arabic.
- Make the English version LTR and visually balanced.
