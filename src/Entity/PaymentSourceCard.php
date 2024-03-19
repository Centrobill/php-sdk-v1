<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\PaymentSource\AbstractPaymentSource;
use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\ExpirationMonth;
use Centrobill\Sdk\ValueObject\ExpirationYear;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\Number;
use Centrobill\Sdk\ValueObject\Type;
use Centrobill\Sdk\ValueObject\threeds;

class PaymentSourceCard extends AbstractPaymentSource
{
    /**
     * @var Type $type
     */
    private Type $type;

    /**
     * @var Number $number
     */
    private Number $number;

    /**
     * @var ExpirationYear $expirationYear
     */
    private ExpirationYear $expirationYear;

    /**
     * @var ExpirationMonth $expirationMonth
     */
    private ExpirationMonth $expirationMonth;

    /**
     * @var Cvv $cvv
     */
    private Cvv $cvv;

    /**
     * @var threeds $threeds
     */
    private threeds $threeds;

    /**
     * @var EmulateCode $emulateCode
     */
    private EmulateCode $emulateCode;

    /**
     * @var Mid $mid
     */
    private Mid $mid;

    public function __construct(
        Type $type,
        Number $number,
        ExpirationYear $expirationYear,
        ExpirationMonth $expirationMonth,
        Cvv $cvv,
        threeds $threeds = null,
        EmulateCode $emulateCode = null,
        Mid $mid = null,
    ) {
        $this->type = $type;
        $this->number = $number;
        $this->expirationYear = $expirationYear;
        $this->expirationMonth = $expirationMonth;
        $this->cvv = $cvv;
        $this->threeds = $threeds;
        $this->emulateCode = $emulateCode;
        $this->mid = $mid;
    }

    public function set3ds(threeds $threeds)
    {
        $this->threeds = $threeds;
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
            'type' => (string)$this->type,
            'number' => (string)$this->number,
            'expirationYear' => (string)$this->expirationYear,
            'expirationMonth' => (string)$this->expirationMonth,
            'cvv' => (string)$this->cvv,
        ];

        if ($this->threeds !== null) {
            $data['3ds'] = (string)$this->threeds;
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
