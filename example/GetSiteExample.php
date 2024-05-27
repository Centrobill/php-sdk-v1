<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GetSiteRequest;
use Centrobill\Sdk\ValueObject\Id;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->getSite(
    new GetSiteRequest(new Id('1276034'))
);

var_dump($response->getData());
