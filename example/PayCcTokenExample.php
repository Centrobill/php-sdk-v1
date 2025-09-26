<?php

use Centrobill\Sdk\Entity\Consumer;
use Centrobill\Sdk\Entity\PaymentSource\PaymentSourceCcToken;
use Centrobill\Sdk\Entity\PaymentUrl;
use Centrobill\Sdk\Entity\Sku;
use Centrobill\Sdk\Entity\Sku\Url;
use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\PayRequest;
use Centrobill\Sdk\ValueObject\Email;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\FirstName;
use Centrobill\Sdk\ValueObject\Ip;
use Centrobill\Sdk\ValueObject\LastName;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\RequestId;
use Centrobill\Sdk\ValueObject\Sku\Name;
use Centrobill\Sdk\ValueObject\Url as UrlValue;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

$sku = new Sku();

$sku->setUrl(
    new Url(
        new UrlValue('https://example.com/'),
        new UrlValue('https://example.com/')
    )
);

$sku->setName(new Name('QA1_CENTROBILL_COM_USD_21'));

$consumer = new Consumer();
$consumer->setFirstName(new FirstName('John'));
$consumer->setLastName(new LastName('Dssoe'));
$consumer->setEmail(new Email('test@centrobill.com'));
$consumer->setExternalId(new ExternalId('test'));
$consumer->setIp(new Ip('127.0.0.1'));

$request = new PayRequest(
    new PaymentSourceCcToken(
        new EmulateCode('0000'),
        new Mid('123')
    ),
    $sku,
    $consumer,
    new PaymentUrl(
        new UrlValue('https://example.com/ipn'),
        new UrlValue('https://example.com/redirect')
    )
);

$request->setRequestId(new RequestId('test'));

var_dump($request->getPayload());

/** @var Client $client */
$response = $client->pay($request);

var_dump($response->getData());
