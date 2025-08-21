<?php

use Centrobill\Sdk\Entity\Fee;
use Centrobill\Sdk\Entity\FeeItem;
use Centrobill\Sdk\Entity\GeoFee;
use Centrobill\Sdk\Entity\Payment;
use Centrobill\Sdk\Entity\Sku;
use Centrobill\Sdk\Entity\Sku\Url;
use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GenerateUrlToPaymentPageRequest;
use Centrobill\Sdk\ValueObject\Country;
use Centrobill\Sdk\ValueObject\Domain;
use Centrobill\Sdk\ValueObject\Fees\Type;
use Centrobill\Sdk\ValueObject\Fees\Value;
use Centrobill\Sdk\ValueObject\PaymentMethod;
use Centrobill\Sdk\ValueObject\Sku\Name;
use Centrobill\Sdk\ValueObject\Url as UrlValue;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$request = new GenerateUrlToPaymentPageRequest();
$sku = new Sku(
    [],
    new Url(
        new UrlValue('https://example.com/'),
        new UrlValue('https://example.com/')
    )
);

$fees = [
    new Fee(
        new Type('processing'),
        [
            // GeoFee items for ALL countries do not require a Country object
            new GeoFee([
                // FeeItem items for ALL payment methods do not require a PaymentMethod object
                new FeeItem(new Value(0.1)),
                new FeeItem(
                    new Value(0.2),
                    new PaymentMethod(PaymentMethod::PAYMENT_METHOD_PIX)
                )
            ]),
            new GeoFee(
                [
                    new FeeItem(new Value(0.5)),
                    new FeeItem(
                        new Value(0.7),
                        new PaymentMethod(PaymentMethod::PAYMENT_METHOD_PIX)
                    )
                ],
                new Country(Country::CODE_BRA)
            )
        ]
    ),
    new Fee(
        new Type('platform'),
        [
            new GeoFee([
                new FeeItem(new Value(0.1)),
            ])
        ]
    )
];

$request->setFees($fees);

$payment = new Payment();
$payment->setDomain(new Domain('https://example.com/test'));

$sku->setName(new Name('QA1_CENTROBILL_COM_USD_21'));
$request->addSku($sku);

$response = $client->generateUrlToPaymentPage($request);
var_dump($response->getData());
