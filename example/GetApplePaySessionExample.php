<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GetApplePaySessionRequest;
use Centrobill\Sdk\ValueObject\SiteName;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->getApplePaySession(
    new GetApplePaySessionRequest(
        new SiteName('site-test.com')
    )
);

var_dump($response->getData());
