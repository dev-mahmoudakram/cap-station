<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Supported locales
    |--------------------------------------------------------------------------
    | Locales the site can be served in. The first / 'default' is Arabic.
    | Each entry carries display metadata used by the language switcher
    | and the <html> direction attribute.
    */

    'default' => 'ar',

    'supported' => ['ar', 'en'],

    'meta' => [
        'ar' => [
            'name'      => 'العربية',
            'dir'       => 'rtl',
            'native'    => 'العربية',
            'switch_to' => 'English',
        ],
        'en' => [
            'name'      => 'English',
            'dir'       => 'ltr',
            'native'    => 'English',
            'switch_to' => 'العربية',
        ],
    ],

];
