<?php

namespace Tests\Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\Entity\PaymentSource\PaymentSourceBancontact;
use Centrobill\Sdk\ValueObject\Bic;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use PHPUnit\Framework\TestCase;

class PaymentSourceBancontactTest extends TestCase
{
    private PaymentSourceBancontact $paymentSource;

    public function testConstruct()
    {
        $this->createEntity();
        self::assertInstanceOf(PaymentSourceBancontact::class, $this->paymentSource);
    }

    public function testToArrayWithoutMid()
    {
        $this->createEntity();
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_BANCONTACT,
            'emulateCode' => '1234',
            'bic' => '12345678',
        ], $this->paymentSource->toArray());
    }

    public function testToArrayWithMid()
    {
        $this->createEntity();
        $this->paymentSource->setMid(new Mid('MidTest'));
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_BANCONTACT,
            'emulateCode' => '1234',
            'bic' => '12345678',
            'mid' => 'MidTest',
        ], $this->paymentSource->toArray());
    }

    private function createEntity()
    {
        $this->paymentSource = new PaymentSourceBancontact(
            new Bic('12345678'),
            new EmulateCode('1234')
        );
    }
}
