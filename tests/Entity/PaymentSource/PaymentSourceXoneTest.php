<?php

namespace Tests\Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\Entity\PaymentSource\PaymentSourceXone;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use PHPUnit\Framework\TestCase;

class PaymentSourceXoneTest extends TestCase
{
    private PaymentSourceXone $paymentSource;

    public function testConstruct()
    {
        $this->createEntity();
        self::assertInstanceOf(PaymentSourceXone::class, $this->paymentSource);
    }

    public function testToArrayWithoutMid()
    {
        $this->createEntity();
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_XONE,
            'emulateCode' => '1234',
        ], $this->paymentSource->toArray());
    }

    public function testToArrayWithMid()
    {
        $this->createEntity();
        $this->paymentSource->setMid(new Mid('MidTest'));
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_XONE,
            'emulateCode' => '1234',
            'mid' => 'MidTest',
        ], $this->paymentSource->toArray());
    }

    private function createEntity()
    {
        $this->paymentSource = new PaymentSourceXone(
            new EmulateCode('1234')
        );
    }
}
