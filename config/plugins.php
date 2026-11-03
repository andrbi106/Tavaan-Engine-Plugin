<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Plugin Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور plugin — همهٔ کلیدهای مستندشده در `docs/03-engines/plugin.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/plugin.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('PLUGIN_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('PLUGIN_PREFIX', 'plugin:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('PLUGIN_LOG_CHANNEL', 'plugin'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Plugin',
        'accessor' => 'plugins',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];