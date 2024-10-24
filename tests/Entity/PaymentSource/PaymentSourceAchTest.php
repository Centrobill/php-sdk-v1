<?php

namespace Tests\Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\Entity\PaymentSource\PaymentSourceAch;
use Centrobill\Sdk\ValueObject\AbaNumber;
use Centrobill\Sdk\ValueObject\AccountNumber;
use Centrobill\Sdk\ValueObject\AccountType;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use PHPUnit\Framework\TestCase;

class PaymentSourceAchTest extends TestCase
{
    private PaymentSourceAch $paymentSource;

    public function testConstruct()
    {
        $this->createEntity();
        self::assertInstanceOf(PaymentSourceAch::class, $this->paymentSource);
    }

    public function testToArrayWithoutMid()
    {
        $this->createEntity();
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_ACH,
            'accountPaymentSourceType' => AccountType::ACCOUNT_TYPE_C,
            'abaNumber' => 'Abatest',
            'accountNumber' => '123',
        ], $this->paymentSource->toArray());
    }

    public function testToArrayWithMid()
    {
        $this->createEntity();
        $this->paymentSource->setMid(new Mid('MidTest'));
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_ACH,
            'accountPaymentSourceType' => AccountType::ACCOUNT_TYPE_C,
            'abaNumber' => 'Abatest',
            'accountNumber' => '123',
            'mid' => 'MidTest',
        ], $this->paymentSource->toArray());
    }

    private function createEntity()
    {
        $this->paymentSource = new PaymentSourceAch(
            new AccountType(AccountType::ACCOUNT_TYPE_C),
            new AbaNumber('Abatest'),
            new AccountNumber('123')
        );
    }
}
