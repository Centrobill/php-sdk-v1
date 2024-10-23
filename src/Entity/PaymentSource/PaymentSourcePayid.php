<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;

class PaymentSourcePayid extends AbstractPaymentSource
{
    /**
     * @var ?EmulateCode $emulateCode
     */
    private ?EmulateCode $emulateCode;

    public function __construct(?EmulateCode $emulateCode = null, ?Mid $mid = null)
    {
        $this->emulateCode = $emulateCode;
        $this->mid = $mid;
    }

    public function setEmulateCode(EmulateCode $emulateCode): self
    {
        $this->emulateCode = $emulateCode;
        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'type' => PaymentSourceType::PAYMENT_SOURCE_PAYID,
        ];

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return array_merge($data, parent::toArray());
    }
}
