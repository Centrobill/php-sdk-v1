<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\CreateTestPaymentDataRequest;
use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\Currency;
use Centrobill\Sdk\ValueObject\Ip;
use Centrobill\Sdk\ValueObject\TestPaymentDataType;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

$request = new CreateTestPaymentDataRequest(
    new TestPaymentDataType(TestPaymentDataType::TEST_PAYMENT_DATE_TYPE_MAESTRO),
    [
        new Ip('10.0.5.1'),
    ],
    false,
    new Amount(10.21),
    new Currency(Currency::CODE_USD)
);

/** @var Client $client */
$response = $client->createTestPaymentData($request);

var_dump($response->getData());
