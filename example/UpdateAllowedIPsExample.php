<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\UpdateAllowedIPsRequest;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Ip;
use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

$request = new UpdateAllowedIPsRequest(
    new ApiKey(API_KEY),
    new Id(111656),
    [
        new Ip('10.0.5.1'),
        new Ip('10.0.5.5'),
    ]
);

/** @var Client $client */
$response = $client->updateAllowedIPs($request);

var_dump($response->getData());
