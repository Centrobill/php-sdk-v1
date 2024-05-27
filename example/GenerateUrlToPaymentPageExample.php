<?php

use Centrobill\Sdk\Entity\Sku;
use Centrobill\Sdk\Entity\Sku\Url;
use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GenerateUrlToPaymentPageRequest;
use Centrobill\Sdk\ValueObject\Sku\Name;
use Centrobill\Sdk\ValueObject\Url as UrlValue;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$request = new GenerateUrlToPaymentPageRequest();
$sku = new Sku(
    new Url(
        new UrlValue('https://example.com/'),
        new UrlValue('https://example.com/')
    )
);

$sku->setName(new Name('QA1_CENTROBILL_COM_USD_21'));
$request->addSku($sku);

$response = $client->generateUrlToPaymentPage($request);
var_dump($response->getData());
