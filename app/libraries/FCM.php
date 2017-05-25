<?php
namespace App\libraries;

class FCM {
    public function sendNotification($token, $payload_notification, $payload_data) {
        $url = 'https://fcm.googleapis.com/fcm/send';

        $fields = array(
            'to' => 'topics/news',
            'priority' => 'normal',
            'notification' => $payload_notification,
            'data' => $payload_data
        );

        $header = array(
            'Authorization: key=AAAAnRADLxc:APA91bFwBApdhZogxkGeInyL28TyKTlAhSWqma_lBZ1Q2T6rVSC1wCuQaVl2b_tg2PzT2hY8Sv6IiFSxN1IfQF8N0GDjzkoRV-Gy0xoDYOeRRmsQ4KWYJCdYos2pjgCxwOHfXG3OsK33',
            'Content-Type: application/json'
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($fields));

        $result = curl_exec($curl);
        if($result === FALSE)
            die('Curl failed: ' . curl_error($curl));
        curl_close($curl);
        echo $result;
    }
}