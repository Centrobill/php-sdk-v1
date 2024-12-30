<?php

namespace Tests\Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\Entity\PaymentSource\PaymentSourceApplePay;
use Centrobill\Sdk\ValueObject\ApplePayPayload;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use PHPUnit\Framework\TestCase;

class PaymentSourceApplePayTest extends TestCase
{
    private PaymentSourceApplePay $paymentSource;

    private static array $payload = ['test' => 'test', 'test_array' => ['test_array2' => ['test' => 123]]];

    public function testConstruct()
    {
        $this->createEntity();
        self::assertInstanceOf(PaymentSourceApplePay::class, $this->paymentSource);
    }

    public function testToArrayWithoutMid()
    {
        $this->createEntity();
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_APPLEPAY,
            'emulateCode' => '1234',
            'token' => self::$payload,
        ], $this->paymentSource->toArray());
    }

    public function testToArrayWithMid()
    {
        $this->createEntity();
        $this->paymentSource->setMid(new Mid('MidTest'));
        self::assertEquals([
            'type' => PaymentSourceType::PAYMENT_SOURCE_APPLEPAY,
            'emulateCode' => '1234',
            'token' => self::$payload,
            'mid' => 'MidTest',
        ], $this->paymentSource->toArray());
    }

    private function createEntity()
    {
        $this->paymentSource = new PaymentSourceApplePay(
            ApplePayPayload::fromToken(json_encode(self::$payload)),
            new EmulateCode('1234')
        );
    }
}
