how to use this package?<br /><br />

Install with composer:<br />
<b>composer require orapakat/zenzivadev</b><br />

Update composer in laravel project:<br />
<b>php artisan vendor:publish</b><br />

Select the provider class: <br />
Provider: Orapakat\Zenzivadev\ZenzivaODVServiceProvider<br />

===========================================================================<br />
Change content in file <b>config/orapakatdev_zenziva.php</b><br /><br />

    'urlRegular' => 'https://console.zenziva.net/',
    'UserkeyRegular' => '',
    'ApikeyRegular' => '',
    'urlCenter' => 'http://[alamatcenter].zenziva.co.id/',
    'UserkeyCenter' => '',
    'ApikeyCenter' => '',
    'instanceID' => '',
    
register on the zenziva.id site to get the user and the api key.    
