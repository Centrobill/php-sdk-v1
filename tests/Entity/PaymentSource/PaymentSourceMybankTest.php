<?php

namespace Tests\Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\Entity\PaymentSource\PaymentSourceMybank;
use Centrobill\Sdk\ValueObject\Bic;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use PHPUnit\Framework\TestCase;

class PaymentSourceMybankTest extends TestCase
{
    private PaymentSourceMybank $paymentSource;

    public function testConstruct()
    {
        $this->createEntity();
        self::assertInstanceOf(PaymentSourceMybank::class, $this->paymentSource);
    }

    public function testToArrayWithoutMid()
    {
        $this->createEntity();
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_MYBANK,
            'bic' => '12345678',
            'emulateCode' => '1234',
        ], $this->paymentSource->toArray());
    }

    public function testToArrayWithMid()
    {
        $this->createEntity();
        $this->paymentSource->setMid(new Mid('MidTest'));
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_MYBANK,
            'bic' => '12345678',
            'emulateCode' => '1234',
            'mid' => 'MidTest',
        ], $this->paymentSource->toArray());
    }

    private function createEntity()
    {
        $this->paymentSource = new PaymentSourceMybank(
            new Bic('12345678'),
            new EmulateCode('1234')
        );
    }
}
