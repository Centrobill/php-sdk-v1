<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\CreditRequest;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Reason;

use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->credit(
    new CreditRequest(
        new ApiKey(API_KEY),
        new Id('111111111'),
        new Reason('reson')
    )
);

var_dump($response->getData());
