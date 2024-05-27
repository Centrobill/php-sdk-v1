<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\CreateSiteRequest;
use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\SiteName;
use Centrobill\Sdk\ValueObject\Url;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->createSite(
    new CreateSiteRequest(
        new SiteName('site-name.com'),
        new ExternalId('123123-test'),
        new Url('https://example.com/ipn'),
        new Url('https://example.com/redirect')
    )
);

var_dump($response->getData());
