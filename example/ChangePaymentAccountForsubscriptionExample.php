<?php

use Centrobill\Sdk\Entity\Consumer;
use Centrobill\Sdk\Entity\PaymentSource\PaymentSourceCard;
use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\ChangePaymentAccountForsubscriptionRequest;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\Email;
use Centrobill\Sdk\ValueObject\ExpirationMonth;
use Centrobill\Sdk\ValueObject\ExpirationYear;
use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\FirstName;
use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Ip;
use Centrobill\Sdk\ValueObject\LastName;
use Centrobill\Sdk\ValueObject\Number;
use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

$consumer = new Consumer();
$consumer->setFirstName(new FirstName('John'));
$consumer->setLastName(new LastName('Doe'));
$consumer->setEmail(new Email('test123123@centrobill.com'));
$consumer->setExternalId(new ExternalId('123123-test'));
$consumer->setIp(new Ip('10.0.5.1'));

/** @var Client $client */
$response = $client->changePaymentAccountForsubscription(
    new ChangePaymentAccountForsubscriptionRequest(
        new ApiKey(API_KEY),
        new Id('1276034'),
        new PaymentSourceCard(
            new Number('4111111111111111'),
            new ExpirationYear('2022'),
            new ExpirationMonth('12'),
            new Cvv('123')
        ),
        $consumer
    )
);

var_dump($response->getData());
