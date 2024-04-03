<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Http\Request\ChangeConsumerGroupRequest;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\GroupId;
use Centrobill\Sdk\ValueObject\Id;
use const Centrobill\Sdk\API_KEY;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

/** @var Client $client */
$response = $client->changeConsumerGroup(
    new ChangeConsumerGroupRequest(
        new ApiKey(API_KEY),
        new Id('132662372'),
        new GroupId(GroupId::GROUP_JUNIOR)
    )
);

var_dump($response->getData());
