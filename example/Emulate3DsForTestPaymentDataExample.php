<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\Emulate3DsForTestPaymentDataRequest;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Id;
use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

$request = new Emulate3DsForTestPaymentDataRequest(
    new ApiKey(API_KEY),
    new Id(111656),
    true
);

/** @var Client $client */
$response = $client->emulate3DsForTestPaymentData($request);

var_dump($response->getData());
