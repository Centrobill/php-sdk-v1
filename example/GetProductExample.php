<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GetProductRequest;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Sku\Name;

use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

$request = new GetProductRequest(
    new ApiKey(API_KEY),
    new Name('SITE_NAME_COM_USD')
);

/** @var Client $client */
$response = $client->getProduct($request);

var_dump($response->getData());
