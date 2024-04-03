<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\SendMessageWithVerificationCodeRequest;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Channel;
use Centrobill\Sdk\ValueObject\From;

use Centrobill\Sdk\ValueObject\Phone;
use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->sendMessageWithVerificationCode(
    new SendMessageWithVerificationCodeRequest(
        new ApiKey(API_KEY),
        new Channel('test'),
        new Phone('680911111111'),
        new From('Joe')
    )
);

var_dump($response->getData());
