<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\ChangeConsumerGroupResponse;
use PHPUnit\Framework\TestCase;

class ChangeConsumerGroupResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/ChangeConsumerGroupResponse.json'));
        $response = new ChangeConsumerGroupResponse($data);

        self::assertEquals((array)$data, $response->getData());
        self::assertEquals($data->id, $response->getId());
        self::assertEquals($data->externalId, $response->getExternalId());
        self::assertEquals($data->username, $response->getUsername());
        self::assertEquals($data->email, $response->getEmail());
        self::assertEquals($data->firstName, $response->getFirstName());
        self::assertEquals($data->lastName, $response->getLastName());
        self::assertEquals($data->birthday, $response->getBirthday());
        self::assertEquals($data->country, $response->getCountry());
    }
}
