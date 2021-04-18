how to use this package?<br /><br />

Install with composer:<br />
composer require orapakat/zenzivadev<br /><br />

Update composer in laravel project:<br />
php artisan vendor:publish<br /><br />

Select the provider class: <br />
Provider: Orapakat\Zenzivadev\ZenzivaODVServiceProvider<br /><br />

===========================================================================<br />
Change content in file config/orapakatdev_zenziva.php<br /><br />

    'urlRegular' => 'https://console.zenziva.net/', <br />
    'UserkeyRegular' => '',<br />
    'ApikeyRegular' => '',<br />
    'urlCenter' => 'http://[alamatcenter].zenziva.co.id/',<br />
    'UserkeyCenter' => '',<br />
    'ApikeyCenter' => '',<br />
    'instanceID' => '',<br /><br />
    
register on the zenziva.id site to get the user and the api key.    
