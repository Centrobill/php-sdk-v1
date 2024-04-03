<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\CreateSiteRequest;
use Centrobill\Sdk\Http\Request\UpdateSiteRequest;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\SiteName;
use Centrobill\Sdk\ValueObject\Url;

use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->updateSite(
    new UpdateSiteRequest(
        new ApiKey(API_KEY),
        new Id('1276034'),
        new SiteName('site-name.com'),
        new ExternalId('123123-test'),
        new Url('https://example.com/ipn/updated'),
        new Url('https://example.com/redirect/updated')
    )
);

var_dump($response->getData());
