<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GenerateCardDataTokenUsingPaymentAccountIdRequest;
use Centrobill\Sdk\ValueObject\ConsumerId;
use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\PaymentAccountId;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->generateCardDataTokenUsingPaymentAccountId(
    new GenerateCardDataTokenUsingPaymentAccountIdRequest(
        new PaymentAccountId('6c0c6381-3c98-4948-809c-afe62428cf3a'),
        new ConsumerId('consumer-id'),
        new Cvv('123')
    )
);

var_dump($response->getData());
