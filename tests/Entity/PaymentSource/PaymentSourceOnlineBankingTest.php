<?php

namespace Tests\Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\Entity\PaymentSource\PaymentSourceOnlineBanking;
use Centrobill\Sdk\ValueObject\Bic;
use Centrobill\Sdk\ValueObject\Bin;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use PHPUnit\Framework\TestCase;

class PaymentSourceOnlineBankingTest extends TestCase
{
    private PaymentSourceOnlineBanking $paymentSource;

    public function testConstruct()
    {
        $this->createEntity();
        self::assertInstanceOf(PaymentSourceOnlineBanking::class, $this->paymentSource);
    }

    public function testToArrayWithoutMid()
    {
        $this->createEntity();
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_ONLINEBANKING,
            'bin' => '123456',
            'bic' => '12345678',
            'emulateCode' => '1234',
        ], $this->paymentSource->toArray());
    }

    public function testToArrayWithMid()
    {
        $this->createEntity();
        $this->paymentSource->setMid(new Mid('MidTest'));
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_ONLINEBANKING,
            'bic' => '12345678',
            'bin' => '123456',
            'emulateCode' => '1234',
            'mid' => 'MidTest',
        ], $this->paymentSource->toArray());
    }

    private function createEntity()
    {
        $this->paymentSource = new PaymentSourceOnlineBanking(
            new Bic('12345678'),
            new EmulateCode('1234')
        );
        $this->paymentSource->setBin(new Bin('123456'));
    }
}
