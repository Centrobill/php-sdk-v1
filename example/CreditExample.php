<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\CreditRequest;
use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Reason;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->credit(
    new CreditRequest(
        new Id('111111111'),
        new Reason('reson')
    )
);

var_dump($response->getData());
