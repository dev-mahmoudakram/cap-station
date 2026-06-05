<?php

/*
|--------------------------------------------------------------------------
| CapStation — Arabic site copy (الافتراضية)
|--------------------------------------------------------------------------
| Phase 2 covers brand / nav / footer. Hero, sections, FAQ, testimonials
| and CTA copy are added in Phase 4. Keep the tone Saudi/Gulf, confident,
| warm and professional — never literal translation.
*/

return [

    'brand'   => 'كاب ستيشن',
    'tagline' => 'محطتك الذكية لفرص أكثر',

    // Hero chip labels (full hero copy is added in Phase 4)
    'hero' => [
        'chip_route_label'  => 'أقرب فرصة',
        'chip_route_value'  => 'على بُعد ٣ كم',
        'chip_wallet_label' => 'دخل اليوم',
        'chip_wallet_value' => '٤٨٠ ر.س',
    ],

    'nav' => [
        'home'         => 'الرئيسية',
        'how_it_works' => 'كيف يعمل',
        'features'     => 'المزايا',
        'partners'     => 'للشركات',
        'faq'          => 'الأسئلة الشائعة',
        'cta'          => 'انضم ككابتن',
    ],

    // Language switcher (aria/label); visible text comes from config/locale.php
    'switch_language' => 'تغيير اللغة',

    'footer' => [
        'description' => 'منصة تشغيل ذكية تجمع للكابتن الفرص والخدمات المساندة في مكان واحد، عشان يتحرك أسرع، يختار أفضل، ويزيد دخله بثقة.',
        'explore'     => 'استكشف',
        'support'     => 'الدعم والمساعدة',
        'contact'     => 'تواصل معنا',
        'follow'      => 'تابعنا',

        // NOTE: placeholder contact details — replace with real business data.
        'email'       => 'hello@capstation.sa',
        'phone'       => '‎+966 5X XXX XXXX',
        'location'    => 'الرياض، المملكة العربية السعودية',

        'rights'      => '© :year كاب ستيشن. جميع الحقوق محفوظة.',
        'made_for'    => 'مصمّمة لخدمة الكباتن في السعودية والخليج.',
    ],

];
