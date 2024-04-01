<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;

class PaymentSourceGash extends AbstractPaymentSource
{
    /**
     * @var ?EmulateCode $emulateCode
     */
    private ?EmulateCode $emulateCode;

    /**
     * @var ?Mid $mid
     */
    private ?Mid $mid;

    public function __construct(?EmulateCode $emulateCode = null, ?Mid $mid = null)
    {
        $this->emulateCode = $emulateCode;
        $this->mid = $mid;
    }

    public function setEmulateCode(EmulateCode $emulateCode)
    {
        $this->emulateCode = $emulateCode;
        return $this;
    }

    public function setMid(Mid $mid)
    {
        $this->mid = $mid;
        return $this;
    }

    public function toArray()
    {
        $data = [
            'type' => PaymentSourceType::PAYMENT_SOURCE_GASH,
        ];

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        if ($this->mid !== null) {
            $data['mid'] = (string)$this->mid;
        }

        return $data;
    }
}
