<?php

namespace Tests\Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\Entity\PaymentSource\PaymentSourceGash;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use PHPUnit\Framework\TestCase;

class PaymentSourceGashTest extends TestCase
{
    private PaymentSourceGash $paymentSource;

    public function testConstruct()
    {
        $this->createEntity();
        self::assertInstanceOf(PaymentSourceGash::class, $this->paymentSource);
    }

    public function testToArrayWithoutMid()
    {
        $this->createEntity();
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_GASH,
            'emulateCode' => '1234',
        ], $this->paymentSource->toArray());
    }

    public function testToArrayWithMid()
    {
        $this->createEntity();
        $this->paymentSource->setMid(new Mid('MidTest'));
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_GASH,
            'emulateCode' => '1234',
            'mid' => 'MidTest',
        ], $this->paymentSource->toArray());
    }

    private function createEntity()
    {
        $this->paymentSource = new PaymentSourceGash(
            new EmulateCode('1234')
        );
    }
}
