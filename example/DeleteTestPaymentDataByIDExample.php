<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\DeleteTestPaymentDataByIDRequest;
use Centrobill\Sdk\ValueObject\Id;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->deleteTestPaymentDataByID(
    new DeleteTestPaymentDataByIDRequest(
        new Id('1111111')
    )
);

var_dump($response->getData());
