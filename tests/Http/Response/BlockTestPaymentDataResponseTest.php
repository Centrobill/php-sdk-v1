<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\BlockTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\Entity\TestPaymentData;
use PHPUnit\Framework\TestCase;

class BlockTestPaymentDataResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/BlockTestPaymentDataResponse.json'));
        $response = new BlockTestPaymentDataResponse($data);

        self::assertEquals((array)$data, $response->getData());
        self::assertInstanceOf(TestPaymentData::class, $response->getTestPaymentData());
    }
}
