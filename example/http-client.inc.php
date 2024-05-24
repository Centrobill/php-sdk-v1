<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\ValueObject\ApiKey;
use const Centrobill\Sdk\API_KEY;
use const Centrobill\Sdk\BASE_URL;
use GuzzleHttp\Client as HttpClient;

$client = new Client(
    new HttpClient([
        'base_uri' => BASE_URL,
    ]),
    [], // TODO replace with history container 
    new ApiKey(API_KEY)
);