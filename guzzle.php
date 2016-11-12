<?php
require 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://api.github.com/skdjskjd');
// echo $res->getStatusCode();
// "200"
//echo $res->getHeader('content-type');
// 'application/json; charset=utf8'
try {
    
} catch (Exception $e) {
    
}

//show 4xx flow with exception handling