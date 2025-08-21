<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\Fees\Value;
use Centrobill\Sdk\ValueObject\PaymentMethod;

class FeeItem
{
    private const DEFAULT_PAYMENT_METHOD = 'ALL';

    /** @var ?PaymentMethod */
    private ?PaymentMethod $paymentMethod;

    /** @var Value */
    private Value $value;

    public function __construct(Value $value, ?PaymentMethod $paymentMethod = null)
    {
        $this->paymentMethod = $paymentMethod;
        $this->value = $value;
    }

    public function setPaymentMethod(PaymentMethod $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'paymentMethod' => $this->paymentMethod ? (string)$this->paymentMethod : self::DEFAULT_PAYMENT_METHOD,
            'value'         => $this->value->getValue(),
        ];
    }
}
