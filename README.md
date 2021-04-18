how to use this package?<br /><br />

Install with composer:
composer require orapakat/zenzivadev

Update composer in laravel project:
php artisan vendor:publish

Select the provider class: 
Provider: Orapakat\Zenzivadev\ZenzivaODVServiceProvider

===========================================================================
Change content in file config/orapakatdev_zenziva.php

/*
    |--------------------------------------------------------------------------
    | Data Connection SMS and Whatsapp Regular
    |--------------------------------------------------------------------------
    */
    'urlRegular' => 'https://console.zenziva.net/', // url regular
    'UserkeyRegular' => '',
    'ApikeyRegular' => '',
    /*
    |--------------------------------------------------------------------------
    | Data Connection SMS and Whatsapp Center
    |--------------------------------------------------------------------------
    */
    'urlCenter' => 'http://[alamatcenter].zenziva.co.id/', // url center
    'UserkeyCenter' => '',
    'ApikeyCenter' => '',
    'instanceID' => '',
    
register on the zenziva.id site to get the user and the api key.    
