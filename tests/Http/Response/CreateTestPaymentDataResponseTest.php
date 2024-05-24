<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\CreateTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\Entity\TestPaymentData;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class CreateTestPaymentDataResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/CreateTestPaymentDataResponse.json'));
        $response = new CreateTestPaymentDataResponse($data);

        self::assertTrue($response->isSuccessful());
        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::assertInstanceOf($response->getTestPaymentData(), TestPaymentData::class);
    }
}
