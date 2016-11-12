<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Promise;

$client = new Client;

// Initiate each request but do not block
$promises = [
    $client->getAsync("https://api.github.com/users/sahanh"),
    $client->getAsync("https://api.github.com/users/sahanh"),
];

// Wait on all of the requests to complete. Throws a ConnectException
// if any of the requests fail
$results = Promise\unwrap($promises);

// Wait for the requests to complete, even if some of them fail
$results = Promise\settle($promises)->wait();

// You can access each result using the key provided to the unwrap
// function.
foreach ($results as $result) {
    echo $result["value"]->getBody();
}