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
    
register on the zenziva.id site to get the user and the api key.<br />    

====================================================================<br />
<b>Guide:</b><br /><br />
Sending SMS Regular: Sms::rsend($telp,$sms)<br />
Sending SMS Masking: Sms::msend($telp,$sms)<br />
Sending OTP Masking: Sms::otpsend($telp,$sms)<br />
Sending SMS Center: Sms::csend($telp,$sms)<br />
Delevery Report SMS Center: Sms::dreport($messageid)<br />
Pulsa Check SMS Center: Sms::cpulsa()<br />
Credit Check SMS Center: Sms::ccredit()<br />
Reading SMS Center (Autoreply): Sms::readsms()<br />
Add Contact SMS Center: Sms::addcontact($name,$nohp)<br />
Get Inbox SMS Center: Sms::getinbox($startdate,$enddate)<br />
Get Outbox SMS Center: Sms::getoutbox($startdate,$enddate)<br /><br />

Sending WhatsApp Regular: Wa::rsend($telp,$sms)<br />
Sending File WhatsApp Regular: Wa::fsend($telp,$caption,$linkurlfile)<br />
Sending Voice WhatsApp Regular: Wa::vsend($telp,$sms)<br />
Sending WhatsApp Center: Wa::csend($telp,$sms)<br />
Delivery Report WhatsApp Center: Wa::dreport($messageid)<br />
Credit Check WhatsApp Center: Wa::creditactive()<br />
Sending File WhatsApp Center: Wa::cfsend($telp,$caption,$linkfile)<br />
Add Contact WhatsApp Center: Wa::addcontact($name,$nohp)<br />
Get Inbox WhatsApp Center: Wa::getinbox($startdate,$enddate)<br />
Get Outbox WhatsApp Center: Wa::getoutbox($startdate,$enddate)<br /><br />
