<?php

declare(strict_types=1);

use Centrobill\Sdk\Entity\Consumer;
use Centrobill\Sdk\Entity\PaymentSource\PaymentSourceCard;
use Centrobill\Sdk\Entity\PaymentUrl;
use Centrobill\Sdk\Entity\Sku;
use Centrobill\Sdk\Entity\Sku\Url;
use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GetProductRequest;
use Centrobill\Sdk\Http\Request\PayRequest;
use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\Email;
use Centrobill\Sdk\ValueObject\ExpirationMonth;
use Centrobill\Sdk\ValueObject\ExpirationYear;
use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\FirstName;
use Centrobill\Sdk\ValueObject\Ip;
use Centrobill\Sdk\ValueObject\LastName;
use Centrobill\Sdk\ValueObject\Number;
use Centrobill\Sdk\ValueObject\RequestId;
use Centrobill\Sdk\ValueObject\Sku\Name;
use Centrobill\Sdk\ValueObject\Url as UrlValue;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/**
 * See the product creation example.
 *
 * @see example/CreateProductExample.php
 */
$request = new GetProductRequest(new Name('SITE_NAME_COM_USD'));

/** @var Client $client */
$productResponse = $client->getProduct($request);

$sku = new Sku();

/**
 * Product name is used as SKU name in previous step.
 */
$sku->setName(new Name($productResponse->getProduct()->getName()));
$sku->setUrl(
    new Url(
        new UrlValue('https://example.com/'),
        new UrlValue('https://example.com/')
    )
);


/**
 * Consumer is created during payment process. Or you can use existing consumer using ID.
 *
 * @see example/CreateConsumerExample.php
 * @var Consumer $consumer
 */
$consumer = new Consumer();
$consumer->setFirstName(new FirstName('John'));
$consumer->setLastName(new LastName('Dssoe'));
$consumer->setEmail(new Email('test@centrobill.com'));
$consumer->setExternalId(new ExternalId('test'));
$consumer->setIp(new Ip('127.0.0.1'));

/**
 * Available payment sources are listed in the documentation.
 *
 * @see src/Entity/PaymentSource
 * @link https://readme.centrobill.com/reference/pay
 */
$paymentSource = new PaymentSourceCard(
    new Number('4111111111111111'),
    new ExpirationYear('25'),
    new ExpirationMonth('12'),
    new Cvv('123')
);

/**
 * If you want to use 3DS, you need to set 3ds to true.
 */
$paymentSource->set3ds(true);

$request = new PayRequest(
    $paymentSource,
    $sku,
    $consumer,
    new PaymentUrl(
        new UrlValue('https://example.com/ipn'),
        new UrlValue('https://example.com/redirect')
    )
);

/** Unique request id */
$request->setRequestId(new RequestId('test'));

/** @var Client $client */
$response = $client->pay($request);

var_dump($response->getData());
