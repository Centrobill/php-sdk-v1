<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GetProductRequest;
use Centrobill\Sdk\ValueObject\Sku\Name;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

$request = new GetProductRequest(new Name('SITE_NAME_COM_USD'));

/** @var Client $client */
$response = $client->getProduct($request);

var_dump($response->getData());
