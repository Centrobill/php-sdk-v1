<?php

namespace Tests\Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\Entity\PaymentSource\PaymentSourcePrzelewytwofour;
use Centrobill\Sdk\ValueObject\Bic;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use PHPUnit\Framework\TestCase;

class PaymentSourcePrzelewytwofourTest extends TestCase
{
    private PaymentSourcePrzelewytwofour $paymentSource;

    public function testConstruct()
    {
        $this->createEntity();
        self::assertInstanceOf(PaymentSourcePrzelewytwofour::class, $this->paymentSource);
    }

    public function testToArrayWithoutMid()
    {
        $this->createEntity();
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_PRZELEWYTWOFOUR,
            'bic' => '12345678',
            'emulateCode' => '1234',
        ], $this->paymentSource->toArray());
    }

    public function testToArrayWithMid()
    {
        $this->createEntity();
        $this->paymentSource->setMid(new Mid('MidTest'));
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_PRZELEWYTWOFOUR,
            'bic' => '12345678',
            'emulateCode' => '1234',
            'mid' => 'MidTest',
        ], $this->paymentSource->toArray());
    }

    private function createEntity()
    {
        $this->paymentSource = new PaymentSourcePrzelewytwofour(
            new Bic('12345678'),
            new EmulateCode('1234')
        );
    }
}
