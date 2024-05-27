<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GetExchangeRateByIso3Request;
use Centrobill\Sdk\ValueObject\Currency;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->getExchangeRateByIso3(
    new GetExchangeRateByIso3Request(
        new Currency(Currency::CODE_USD)
    )
);

var_dump($response->getData());
