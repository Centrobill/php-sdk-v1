<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\BlockTestPaymentDataRequest;
use Centrobill\Sdk\ValueObject\Id;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->blockTestPaymentData(
    new BlockTestPaymentDataRequest(
        new Id('111656')
    )
);

var_dump($response->getData());
