<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Sku;
use Centrobill\Sdk\Http\Response\GetProductResponse;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class GetProductResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/GetProductResponse.json'));
        $response = new GetProductResponse($data);

        self::assertTrue($response->isSuccessful());
        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::isInstanceOf($response->getProduct(), Sku::class);
    }
}
