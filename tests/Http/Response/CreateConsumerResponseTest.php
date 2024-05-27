<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\CreateConsumerResponse;
use Centrobill\Sdk\Http\Response\Entity\Consumer;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class CreateConsumerResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/CreateConsumerResponse.json'));
        $response = new CreateConsumerResponse($data);

        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::assertInstanceOf(Consumer::class, $response->getConsumer());
    }
}
