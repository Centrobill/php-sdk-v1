<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\UpdateBalanceOfTheTestPaymentDataRequest;
use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Id;

use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->updateBalanceOfTheTestPaymentData(
    new UpdateBalanceOfTheTestPaymentDataRequest(
        new ApiKey(API_KEY),
        new Id('111656'),
        new Amount(100)
    )
);

var_dump($response->getData());
