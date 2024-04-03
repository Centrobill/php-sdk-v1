<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\GetListOfExternalIpsRequest;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->getListOfExternalIps(new GetListOfExternalIpsRequest());
var_dump($response->getData());
