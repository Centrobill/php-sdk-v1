<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\Bic;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;

class PaymentSourceEps extends AbstractPaymentSource
{
    /**
     * @var ?Bic $bic
     */
    private ?Bic $bic;

    /**
     * @var ?EmulateCode $emulateCode
     */
    private ?EmulateCode $emulateCode;

    /**
     * @var ?Mid $mid
     */
    private ?Mid $mid;

    public function __construct(
        ?Bic $bic = null,
        ?EmulateCode $emulateCode = null,
        ?Mid $mid = null
    ) {
        $this->bic = $bic;
        $this->emulateCode = $emulateCode;
        $this->mid = $mid;
    }

    public function setBic(Bic $bic)
    {
        $this->bic = $bic;
        return $this;
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
            'type' => PaymentSourceType::PAYMENT_SOURCE_EPS,
        ];

        if ($this->bic !== null) {
            $data['bic'] = (string)$this->bic;
        }

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        if ($this->mid !== null) {
            $data['mid'] = (string)$this->mid;
        }

        return $data;
    }
}
