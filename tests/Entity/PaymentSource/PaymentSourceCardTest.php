<?php

namespace Tests\Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\Entity\PaymentSource\PaymentSourceCard;
use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\ExpirationMonth;
use Centrobill\Sdk\ValueObject\ExpirationYear;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\Number;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use PHPUnit\Framework\TestCase;

class PaymentSourceCardTest extends TestCase
{
    private PaymentSourceCard $paymentSource;

    public function testConstruct()
    {
        $this->createEntity();
        self::assertInstanceOf(PaymentSourceCard::class, $this->paymentSource);
    }

    public function testToArrayWithoutMid()
    {
        $this->createEntity();
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_CARD,
            'cvv' => '123',
            'expirationMonth' => '12',
            'expirationYear' => (string)(date('y') + 1),
            'number' => '4111111111111111',
            'emulateCode' => '1234',
            'threeDS' => false,
        ], $this->paymentSource->toArray());
    }

    public function testToArrayWithMid()
    {
        $this->createEntity();
        $this->paymentSource->setMid(new Mid('MidTest'));
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_CARD,
            'cvv' => '123',
            'expirationMonth' => '12',
            'expirationYear' => (string)(date('y') + 1),
            'number' => '4111111111111111',
            'emulateCode' => '1234',
            'mid' => 'MidTest',
            'threeDS' => false,
        ], $this->paymentSource->toArray());
    }

    private function createEntity()
    {
        $this->paymentSource = new PaymentSourceCard(
            new Number('4111111111111111'),
            new ExpirationYear(date('y') + 1),
            new ExpirationMonth('12'),
            new Cvv('123'),
            false,
            new EmulateCode('1234')
        );
    }
}
