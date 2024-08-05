<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\DisablePaymentAccountForQuickSaleResponse;
use PHPUnit\Framework\TestCase;

class DisablePaymentAccountForQuickSaleResponseTest extends TestCase
{
    public function testGetters()
    {
        $response = new DisablePaymentAccountForQuickSaleResponse("");

        self::assertEquals("", $response->getData());
    }
}
