<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\CreateConsumerRequest;
use Centrobill\Sdk\ValueObject\ExternalId;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

$request = new CreateConsumerRequest(
    new ExternalId('123-test')
);

/** @var Client $client */
$response = $client->createConsumer($request);

var_dump($response->getData());