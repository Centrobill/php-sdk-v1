<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\ValueObject\ApiKey;

use const Centrobill\Sdk\STAGE_URL;

use GuzzleHttp\Client as HttpClient;

$client = new Client(
    new HttpClient([
        'base_uri' => STAGE_URL,
    ]),
    new ApiKey('YOUR_API_KEY')
);
