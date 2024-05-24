<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GenerateCardDataTokenRequest;
use Centrobill\Sdk\ValueObject\CardHolder;
use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\ExpirationMonth;
use Centrobill\Sdk\ValueObject\ExpirationYear;
use Centrobill\Sdk\ValueObject\Number;
use Centrobill\Sdk\ValueObject\Zip;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->generateCardDataToken(
    new GenerateCardDataTokenRequest(
        new Number('4111111111111111'),
        new ExpirationYear('25'),
        new ExpirationMonth('12'),
        new Cvv('123'),
        new CardHolder('John Doe'),
        new Zip('12345')
    )
);

var_dump($response->getData());
