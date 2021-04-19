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
Add namespace in Controller:<br />
use Orapakat\Zenzivadev\Sms as SMS;<br />
use Orapakat\Zenzivadev\Wa as WA;<br /><br />
Sending SMS Regular: SMS::rsend($telp,$sms)<br />
Sending SMS Masking: SMS::msend($telp,$sms)<br />
Sending OTP Masking: SMS::otpsend($telp,$sms)<br />
Sending SMS Center: SMS::csend($telp,$sms)<br />
Delevery Report SMS Center: SMS::dreport($messageid)<br />
Pulsa Check SMS Center: SMS::cpulsa()<br />
Credit Check SMS Center: SMS::ccredit()<br />
Reading SMS Center (Autoreply): SMS::readsms()<br />
Add Contact SMS Center: SMS::addcontact($name,$nohp)<br />
Get Inbox SMS Center: SMS::getinbox($startdate,$enddate)<br />
Get Outbox SMS Center: SMS::getoutbox($startdate,$enddate)<br /><br />

Sending WhatsApp Regular: WA::rsend($telp,$sms)<br />
Sending File WhatsApp Regular: WA::fsend($telp,$caption,$linkurlfile)<br />
Sending Voice WhatsApp Regular: WA::vsend($telp,$sms)<br />
Sending WhatsApp Center: WA::csend($telp,$sms)<br />
Delivery Report WhatsApp Center: WA::dreport($messageid)<br />
Credit Check WhatsApp Center: WA::creditactive()<br />
Sending File WhatsApp Center: WA::cfsend($telp,$caption,$linkfile)<br />
Add Contact WhatsApp Center: WA::addcontact($name,$nohp)<br />
Get Inbox WhatsApp Center: WA::getinbox($startdate,$enddate)<br />
Get Outbox WhatsApp Center: WA::getoutbox($startdate,$enddate)<br /><br />
