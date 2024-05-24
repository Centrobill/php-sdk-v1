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

        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::assertInstanceOf($data->paymentAccountId, $response->getPaymentAccountId());
    }
}
