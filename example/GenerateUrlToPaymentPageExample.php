<?php

use Centrobill\Sdk\Entity\Consumer;
use Centrobill\Sdk\Entity\Fee;
use Centrobill\Sdk\Entity\FeeItem;
use Centrobill\Sdk\Entity\GeoFee;
use Centrobill\Sdk\Entity\Payment;
use Centrobill\Sdk\Entity\Price;
use Centrobill\Sdk\Entity\Sku;
use Centrobill\Sdk\Entity\Sku\Url;
use Centrobill\Sdk\Entity\Template;
use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GenerateUrlToPaymentPageRequest;
use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\Country;
use Centrobill\Sdk\ValueObject\Currency;
use Centrobill\Sdk\ValueObject\Domain;
use Centrobill\Sdk\ValueObject\Email;
use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\Fees\Type;
use Centrobill\Sdk\ValueObject\Fees\Value;
use Centrobill\Sdk\ValueObject\Field;
use Centrobill\Sdk\ValueObject\Offset;
use Centrobill\Sdk\ValueObject\PaymentMethod;
use Centrobill\Sdk\ValueObject\Sku\Name;
use Centrobill\Sdk\ValueObject\Url as UrlValue;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$request = new GenerateUrlToPaymentPageRequest();
$sku = new Sku(
    [
        new Price(
            new Amount(120),
            null,
            new Currency(Currency::CODE_USD),
            false
        )
    ],
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
$payment->setSecure(true);

$metadata = [
    new Field('orderId', '123'),
    new Field('userId', '1111'),
    new Field('merchantUserId', '2222'),
    new Field('payerIp', ''),
    new Field('source', 'checkout'),
    new Field('wishItemId', '2222'),
    new Field('wishItemName', 'Test W123'),
    new Field('merchant_external_id', '3333'),
];

$consumer = new Consumer();
$consumer->setExternalId(new ExternalId('2222'));
$consumer->setEmail(new Email('test@example.com'));

$sku->setName(new Name('QA1_CENTROBILL_COM_USD_21'));
$request->addSku($sku);
$request->setFees($fees);
$request->setConsumer($consumer);
$request->setPayment($payment);
$request->setMetadata($metadata);

$response = $client->generateUrlToPaymentPage($request);
var_dump($response->getData());
