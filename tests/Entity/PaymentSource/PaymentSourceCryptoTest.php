<?php

namespace Tests\Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\Entity\PaymentSource\PaymentSourceCrypto;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use PHPUnit\Framework\TestCase;

class PaymentSourceCryptoTest extends TestCase
{
    private PaymentSourceCrypto $paymentSource;

    public function testConstruct()
    {
        $this->createEntity();
        self::assertInstanceOf(PaymentSourceCrypto::class, $this->paymentSource);
    }

    public function testToArrayWithoutMid()
    {
        $this->createEntity();
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_CRYPTO,
            'emulateCode' => '1234',
        ], $this->paymentSource->toArray());
    }

    public function testToArrayWithMid()
    {
        $this->createEntity();
        $this->paymentSource->setMid(new Mid('MidTest'));
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_CRYPTO,
            'emulateCode' => '1234',
            'mid' => 'MidTest',
        ], $this->paymentSource->toArray());
    }

    private function createEntity()
    {
        $this->paymentSource = new PaymentSourceCrypto(
            new EmulateCode('1234')
        );
    }
}
