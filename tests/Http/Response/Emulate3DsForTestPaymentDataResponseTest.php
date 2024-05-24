<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Emulate3DsForTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\Entity\TestPaymentData;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class Emulate3DsForTestPaymentDataResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/Emulate3DsForTestPaymentDataResponse.json'));
        $response = new Emulate3DsForTestPaymentDataResponse($data);

        self::assertTrue($response->isSuccessful());
        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::assertInstanceOf($response->getTestPaymentData(), TestPaymentData::class);
    }
}
