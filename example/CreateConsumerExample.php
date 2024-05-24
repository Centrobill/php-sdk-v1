<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\CreateConsumerRequest;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\ExternalId;

use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

$request = new CreateConsumerRequest(
    new ApiKey(API_KEY),
    new ExternalId('123-test')
);

// 132662372

/** @var Client $client */
$response = $client->createConsumer($request);

var_dump($response->getData());