<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GetAvailableChannelsOfCodeVerificationRequest;
use Centrobill\Sdk\ValueObject\Phone;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->getAvailableChannelsOfCodeVerification(
    new GetAvailableChannelsOfCodeVerificationRequest(
        new Phone('380979462679')
    )
);

var_dump($response->getData());
