<?php

use Centrobill\Sdk\Entity\Price;
use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\CreateProductRequest;
use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Currency;
use Centrobill\Sdk\ValueObject\Offset;
use Centrobill\Sdk\ValueObject\Sku\SiteId;
use Centrobill\Sdk\ValueObject\Sku\SkuType;
use Centrobill\Sdk\ValueObject\Sku\Title;

use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

$price = new Price();
$price->setAmount(new Amount(100));
$price->setCurrency(new Currency(Currency::CODE_USD));
$price->setOffset(new Offset('3d'));

$request = new CreateProductRequest(
    new ApiKey(API_KEY),
    new SiteId('1276034'),
    new Title('product-title'),
    new SkuType(SkuType::SKU_ONE_TIME),
);

$request->setAmount(new Amount(100));
$request->setCurrency(new Currency(Currency::CODE_USD));

/** @var Client $client */
$response = $client->createProduct($request);

var_dump($response->getData());
