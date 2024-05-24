<?php

use Centrobill\Sdk\Entity\Price;
use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\ChangeSubscriptionRequest;
use Centrobill\Sdk\ValueObject\Amount;

use Centrobill\Sdk\ValueObject\Currency;
use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Offset;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

$price = new Price();
$price->setAmount(new Amount(100));
$price->setCurrency(new Currency(Currency::CODE_USD));
$price->setOffset(new Offset('3d'));

/** @var Client $client */
$response = $client->changeSubscription(
    new ChangeSubscriptionRequest(
        new Id('1276034'),
        [
            $price
        ]
    )
);

var_dump($response->getData());
