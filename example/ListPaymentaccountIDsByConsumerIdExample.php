<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\ListPaymentAccountIDsByConsumerIdRequest;
use Centrobill\Sdk\ValueObject\Id;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->listPaymentAccountIdsByConsumerId(
    new ListPaymentAccountIDsByConsumerIdRequest(
        new Id('132662372')
    )
);

var_dump($response->getData());
