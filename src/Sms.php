<?php

namespace Orapakat\Zenzivadev;

class Sms {
    // SMS Regular Sending
    public static function rsend($telp,$sms)
    {
        $userkey = config('orapakatdev_zenziva.UserkeyRegular');
        $passkey = config('orapakatdev_zenziva.ApikeyRegular');
        $telepon = @$telp;
        $message = @$sms;
        $url = config('orapakatdev_zenziva.urlRegular').'reguler/api/sendsms/';
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

    // SMS Masking Sending
    public static function msend($telp,$sms)
    {
        $userkey = config('orapakatdev_zenziva.UserkeyRegular');
        $passkey = config('orapakatdev_zenziva.ApikeyRegular');
        $telepon = @$telp;
        $message = @$sms;
        $url = config('orapakatdev_zenziva.urlRegular').'masking/api/sendsms/';
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

    // SMS Masking OTP
    public static function otpsend($telp,$sms)
    {
        $userkey = config('orapakatdev_zenziva.UserkeyRegular');
        $passkey = config('orapakatdev_zenziva.ApikeyRegular');
        $telepon = @$telp;
        $message = @$sms;
        $url = config('orapakatdev_zenziva.urlRegular').'masking/api/sendOTP/';
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
    // SMS Center Sending
    public static function csend($telp,$sms)
    {
        $userkey = config('orapakatdev_zenziva.UserkeySMSCenter');
        $passkey = config('orapakatdev_zenziva.ApikeySMSCenter');
        $telepon = @$telp;
        $message = @$sms;
        $url = config('orapakatdev_zenziva.urlSMSCenter').'api/sendsms/';
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

    // SMS Center Deliviery Report
    public static function dreport($msgid)
    {
        $userkey = config('orapakatdev_zenziva.UserkeySMSCenter');
        $passkey = config('orapakatdev_zenziva.ApikeySMSCenter');
        $messageId = @$msgid;
        $url = config('orapakatdev_zenziva.urlSMSCenter').'api/report/?userkey='.$userkey.'&passkey='.$passkey.'&messageId='.$messageId;
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

    // SMS Center Pulsa Check
    public static function cpulsa()
    {
        $userkey = config('orapakatdev_zenziva.UserkeySMSCenter');
        $passkey = config('orapakatdev_zenziva.ApikeySMSCenter');
        $url = config('orapakatdev_zenziva.urlSMSCenter').'api/sendussd/?userkey='.$userkey.'&passkey='.$passkey;
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

    // SM Center Credit Check
    public static function ccredit()
    {
        $userkey = config('orapakatdev_zenziva.UserkeySMSCenter');
        $passkey = config('orapakatdev_zenziva.ApikeySMSCenter');
        $url = config('orapakatdev_zenziva.urlSMSCenter').'api/balance/?userkey='.$userkey.'&passkey='.$passkey;
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

    // SMS Center read
    public static function readsms()
    {
        $userkey = config('orapakatdev_zenziva.UserkeySMSCenter');
        $passkey = config('orapakatdev_zenziva.ApikeySMSCenter');
        $url = config('orapakatdev_zenziva.urlSMSCenter').'api/readsms/?userkey='.$userkey.'&passkey='.$passkey;
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

    // SMS Center add contact
    public static function addcontact($name,$hp)
    {
        $userkey = config('orapakatdev_zenziva.UserkeySMSCenter');
        $passkey = config('orapakatdev_zenziva.ApikeySMSCenter');
        $nama = @$name;
        $nohp = @$hp;
        $url = config('orapakatdev_zenziva.urlSMSCenter').'api/addkontak/';
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

    // SMS Center get inbox
    public static function getinbox($start,$end)
    {
        $userkey = config('orapakatdev_zenziva.UserkeySMSCenter');
        $passkey = config('orapakatdev_zenziva.ApikeySMSCenter');
        $url = config('orapakatdev_zenziva.urlSMSCenter').'api/getinbox/?userkey='.$userkey.'&passkey='.$passkey.'&start_date='.$start.'&end_date='.$end;
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

    // SMS Center get outbox
    public static function getoutbox($start,$end)
    {
        $userkey = config('orapakatdev_zenziva.UserkeySMSCenter');
        $passkey = config('orapakatdev_zenziva.ApikeySMSCenter');
        $url = config('orapakatdev_zenziva.urlSMSCenter').'api/getoutbox/?userkey='.$userkey.'&passkey='.$passkey.'&start_date='.$start.'&end_date='.$end;
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
