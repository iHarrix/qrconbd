<?php

return [
    /* Main */
    'logo_light' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'svg', 'gif', 'webp'],
        'path' => 'main/',
    ],
    'logo_dark' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'svg', 'gif', 'webp'],
        'path' => 'main/',
    ],
    'logo_email' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'gif'],
        'path' => 'main/',
    ],
    'favicon' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'ico', 'svg', 'gif', 'webp'],
        'path' => 'main/',
    ],
    'opengraph' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'svg', 'gif', 'webp'],
        'path' => 'main/',
    ],

    /* Blog featured images */
    'blog' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'svg', 'gif', 'webp'],
        'path' => 'blog/',
    ],

    /* Payment proofs for offline payments */
    'offline_payment_proofs' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'pdf'],
        'path' => 'offline_payment_proofs/',
    ],

    /* QR codes */
    'qr_codes' => [
        'path' => 'qr_codes/logo/'
    ],

    'qr_codes/logo' => [
        'whitelisted_file_extensions' => ['jpg', 'jpeg', 'png', 'gif'],
        'path' => 'qr_codes/logo/'
    ],
];
