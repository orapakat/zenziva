<?php

namespace Orapakat\Zenzivadev;

class Wa {
    // WA Regular Sending
    public static function rsend($telp,$sms)
    {
        $userkey = config('orapakatdev_zenziva.UserkeyRegular');
        $passkey = config('orapakatdev_zenziva.ApikeyRegular');
        $telepon = @$telp;
        $message = @$sms;
        $url = config('orapakatdev_zenziva.urlRegular').'wareguler/api/sendWA/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'to' => $telepon,
            'message' => $message
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);

        return $results;
    }

    // WA Sending Image
    public static function fsend($telp,$captions,$image)
    {
        $userkey = config('orapakatdev_zenziva.UserkeyRegular');
        $passkey = config('orapakatdev_zenziva.ApikeyRegular');
        $telepon = @$telp;
        $image_link = @$image;
        $caption  = @$captions;
        $url = config('orapakatdev_zenziva.urlRegular').'wareguler/api/sendWAFile/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'to' => $telepon,
            'link' => $image_link,
            'caption' => $caption
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);

        return $results;
    }

    // WA send voice
    public static function vsend($telp,$sms)
    {
        $userkey = config('orapakatdev_zenziva.UserkeyRegular');
        $passkey = config('orapakatdev_zenziva.ApikeyRegular');
        $telepon = @$telp;
        $message = @$sms;
        $url = config('orapakatdev_zenziva.urlRegular').'voice/api/sendvoice/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'to' => $telepon,
            'message' => $message
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);

        return $results;
    }

    // WA Center Sending
    public static function csend($telp,$sms)
    {
        $userkey = config('orapakatdev_zenziva.UserkeyCenter');
        $passkey = config('orapakatdev_zenziva.ApikeyCenter');
        $instanceID = config('orapakatdev_zenziva.instanceID');
        $telepon = @$telp;
        $message = @$sms;
        $url = config('orapakatdev_zenziva.urlCenter').'api/WAsendMsg/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'instance' => $instanceID,
            'nohp' => $telepon,
            'pesan' => $message
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);

        return $results;
    }

    // WA Center Deliviery Report
    public static function dreport($msgid)
    {
        $userkey = config('orapakatdev_zenziva.UserkeyCenter');
        $passkey = config('orapakatdev_zenziva.ApikeyCenter');
        $messageId = @$msgid;
        $url = config('orapakatdev_zenziva.urlCenter').'api/report/?userkey='.$userkey.'&passkey='.$passkey.'&messageId='.$messageId;
        $curlHandle = curl_init();
        curl_setopt_array($curlHandle, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json'
            ),
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);

        return $results;
    }

    // WA Center credit check and active period
    public static function creditactive()
    {
        $userkey = config('orapakatdev_zenziva.UserkeyCenter');
        $passkey = config('orapakatdev_zenziva.ApikeyCenter');
        $url = config('orapakatdev_zenziva.urlCenter').'api/balance/?userkey='.$userkey.'&passkey='.$passkey;
        $curlHandle = curl_init();
        curl_setopt_array($curlHandle, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json'
            ),
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);

        return $results;
    }

    // WA Center Sending File
    public static function cfsend($telp,$captions,$image)
    {
        $userkey = config('orapakatdev_zenziva.UserkeyCenter');
        $passkey = config('orapakatdev_zenziva.ApikeyCenter');
        $instanceID = config('orapakatdev_zenziva.instanceID');
        $telepon = @$telp;
        $image_link = @$image;
        $caption  = @$captions;
        $url = config('orapakatdev_zenziva.urlCenter').'api/WAsendFile/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'instance' => $instanceID,
            'nohp' => $telepon,
            'link' => $image_link,
            'caption' => $caption
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);

        return $results;
    }

    // WA Center add contact
    public static function addcontact($name,$hp)
    {
        $userkey = config('orapakatdev_zenziva.UserkeyCenter');
        $passkey = config('orapakatdev_zenziva.ApikeyCenter');
        $nama = @$name;
        $nohp = @$hp;
        $url = config('orapakatdev_zenziva.urlCenter').'api/addkontak/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'nama' => $nama,
            'nohp' => $nohp
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);

        return $results;
    }

    // WA Center get inbox
    public static function getinbox($start,$end)
    {
        $userkey = config('orapakatdev_zenziva.UserkeyCenter');
        $passkey = config('orapakatdev_zenziva.ApikeyCenter');
        $instanceID = config('orapakatdev_zenziva.instanceID');
        $url = config('orapakatdev_zenziva.urlCenter').'api/getinbox/?userkey='.$userkey.'&passkey='.$passkey.'&instance='.$instanceID.'&start_date='.$start.'&end_date='.$end;
        $curlHandle = curl_init();
        curl_setopt_array($curlHandle, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json'
            ),
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);

        return $results;
    }

    // WA Center get outbox
    public static function getoutbox($start,$end)
    {
        $userkey = config('orapakatdev_zenziva.UserkeyCenter');
        $passkey = config('orapakatdev_zenziva.ApikeyCenter');
        $instanceID = config('orapakatdev_zenziva.instanceID');
        $url = config('orapakatdev_zenziva.urlCenter').'api/getoutbox/?userkey='.$userkey.'&passkey='.$passkey.'&instance='.$instanceID.'&start_date='.$start.'&end_date='.$end;
        $curlHandle = curl_init();
        curl_setopt_array($curlHandle, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json'
            ),
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);

        return $results;
    }

}