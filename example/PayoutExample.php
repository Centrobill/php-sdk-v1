<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\PayoutRequest;
use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\ConsumerId;
use Centrobill\Sdk\ValueObject\Currency;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->payout(
    new PayoutRequest(
        new Amount(1000),
        new Currency(Currency::CODE_USD),
        new ConsumerId('111111111')
    )
);

var_dump($response->getData());
