<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\CancelSubscriptionRequest;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Reason;

use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

$request = new CancelSubscriptionRequest(
    new ApiKey(API_KEY),
    new Id('1276034'),
);

$request->setReason(new Reason('reason'));
$request->setCancelDate(new DateTimeImmutable());

/** @var Client $client */
$response = $client->cancelSubscription($request);

var_dump($response->getData());
