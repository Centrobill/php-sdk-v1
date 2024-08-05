<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\ChangeConsumerGroupResponse;
use Centrobill\Sdk\Http\Response\Entity\Consumer;
use PHPUnit\Framework\TestCase;

class ChangeConsumerGroupResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/ChangeConsumerGroupResponse.json'));
        $response = new ChangeConsumerGroupResponse($data);

        self::assertEquals((array)$data, $response->getData());
        self::assertInstanceOf(Consumer::class, $response->getConsumer());
    }
}
