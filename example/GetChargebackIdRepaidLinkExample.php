<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GetChargebackIdRepaidLinkRequest;
use Centrobill\Sdk\ValueObject\Id;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->getChargebackIdRepaidLink(
    new GetChargebackIdRepaidLinkRequest(
        new Id('111111111')
    )
);

var_dump($response->getData());
