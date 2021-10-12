<?php

return [
    'settings' => [
        'title' => 'Captcha',
        'description' => 'Configuración de Google Captcha',
        'captcha_site_key' => 'Clave del sitio Captcha',
        'captcha_secret' => 'Secreto del Captcha',
        'enable_captcha' => '¿Habilitar Captcha?',
        'helper' => 'Vaya aquí para obtener las credenciales https://www.google.com/recaptcha/admin#list.',
        'hide_badge' => 'Ocultar insignia de recaptcha (para v3)',
        'type' => 'Tipo',
        'v2_description' => 'V2 (Verificar solicitudes con un reto)',
        'v3_description' => 'V3 (Verificar solicitudes con una puntuación)',
    ],
    'failed_validate' => 'Fallo en la validación del captcha.',
];
