<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\CheckVerificationCodeRequest;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Code;
use Centrobill\Sdk\ValueObject\Phone;

use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->checkVerificationCode(
    new CheckVerificationCodeRequest(
        new ApiKey(API_KEY),
        new Phone('680911111111'),
        new Code('1234')
    )
);

var_dump($response->getData());
