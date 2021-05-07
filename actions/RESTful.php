<?php
    function curl_get($url) {
        $client = curl_init($url);   
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        curl_close($client);
        return $response;
    }
?>