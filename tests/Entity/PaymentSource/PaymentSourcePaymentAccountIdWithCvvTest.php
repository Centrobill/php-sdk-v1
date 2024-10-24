<?php

namespace Tests\Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\Entity\PaymentSource\PaymentSourcePaymentAccountIdWithCvv;
use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentAccountId;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use PHPUnit\Framework\TestCase;

class PaymentSourcePaymentAccountIdWithCvvTest extends TestCase
{
    private PaymentSourcePaymentAccountIdWithCvv $paymentSource;

    public function testConstruct()
    {
        $this->createEntity();
        self::assertInstanceOf(PaymentSourcePaymentAccountIdWithCvv::class, $this->paymentSource);
    }

    public function testToArrayWithoutMid()
    {
        $this->createEntity();
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_PAYMENT_ACCOUNT_ID_WITH_CVV,
            'paymentAccountId' => 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a11',
            'cvv' => '123',
            'emulateCode' => '1234',
        ], $this->paymentSource->toArray());
    }

    public function testToArrayWithMid()
    {
        $this->createEntity();
        $this->paymentSource->setMid(new Mid('MidTest'));
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_PAYMENT_ACCOUNT_ID_WITH_CVV,
            'paymentAccountId' => 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a11',
            'cvv' => '123',
            'emulateCode' => '1234',
            'mid' => 'MidTest',
        ], $this->paymentSource->toArray());
    }

    private function createEntity()
    {
        $this->paymentSource = new PaymentSourcePaymentAccountIdWithCvv(
            new PaymentAccountId('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a11'),
            new Cvv('123'),
            new EmulateCode('1234')
        );
    }
}
