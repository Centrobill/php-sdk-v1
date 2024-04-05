<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\DisablePaymentAccountForQuickSaleResponse;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class DisablePaymentAccountForQuickSaleResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/DisablePaymentAccountForQuickSaleResponse.json'));
        $response = new DisablePaymentAccountForQuickSaleResponse($data);

        self::assertTrue($response->isSuccessful());
        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::isInstanceOf($data->paymentAccountId, $response->getPaymentAccountId());
    }
}
