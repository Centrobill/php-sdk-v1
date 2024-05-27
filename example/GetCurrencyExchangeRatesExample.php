<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GetCurrencyExchangeRatesRequest;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->getCurrencyExchangeRates(
    new GetCurrencyExchangeRatesRequest()
);

var_dump($response->getData());
