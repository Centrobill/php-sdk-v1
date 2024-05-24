<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\CreditResponse;
use Centrobill\Sdk\Http\Response\Entity\Payment;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class CreditResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/CreditResponse.json'));
        $response = new CreditResponse($data);

        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::assertInstanceOf(Payment::class, $response->getPayment());
    }
}
