<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GetCurrencyExchangeRatesRequest;
use Centrobill\Sdk\ValueObject\ApiKey;

use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->getCurrencyExchangeRates(
    new GetCurrencyExchangeRatesRequest(
        new ApiKey(API_KEY),
    )
);

var_dump($response->getData());
