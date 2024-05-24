<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GetListOfTestPaymentDataRequest;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->getListOfTestPaymentData(
    new GetListOfTestPaymentDataRequest()
);

var_dump($response->getData());
