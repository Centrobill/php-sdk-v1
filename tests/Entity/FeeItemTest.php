<?php

declare(strict_types=1);

namespace Tests\Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\FeeItem;
use Centrobill\Sdk\ValueObject\Fees\Value;
use Centrobill\Sdk\ValueObject\PaymentMethod;
use PHPUnit\Framework\TestCase;

class FeeItemTest extends TestCase
{
    private FeeItem $entity;

    public function testToArrayWithDefaultPaymentMethod()
    {
        $this->entity = new FeeItem(new Value(0.1));

        self::assertEquals([
                'paymentMethod' => 'ALL',
                'value' => 0.1,
            ],
            $this->entity->toArray()
        );
    }

    public function testToArrayWithSpecificPaymentMethod()
    {
        $this->entity = new FeeItem(
            new Value(0.2),
            new PaymentMethod(PaymentMethod::PAYMENT_METHOD_PIX)
        );

        self::assertEquals([
                'paymentMethod' => 'pix',
                'value' => 0.2,
            ],
            $this->entity->toArray()
        );
    }
}
