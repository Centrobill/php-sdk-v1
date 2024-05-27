<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\EnablePaymentAccountForQuickSaleRequest;
use Centrobill\Sdk\ValueObject\PaymentAccountId;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->enablePaymentAccountForQuickSale(
    new EnablePaymentAccountForQuickSaleRequest(
        new PaymentAccountId('111111111')
    )
);

var_dump($response->getData());
