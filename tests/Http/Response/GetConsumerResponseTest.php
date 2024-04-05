<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Consumer;
use Centrobill\Sdk\Http\Response\GetConsumerResponse;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class GetConsumerResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/GetConsumerResponse.json'));
        $response = new GetConsumerResponse($data);

        self::assertTrue($response->isSuccessful());
        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::isInstanceOf($response->getConsumer(), Consumer::class);
    }
}
