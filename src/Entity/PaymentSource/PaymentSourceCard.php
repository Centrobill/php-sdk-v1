<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\ExpirationMonth;
use Centrobill\Sdk\ValueObject\ExpirationYear;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\Number;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use Centrobill\Sdk\ValueObject\threeDS;

class PaymentSourceCard extends AbstractPaymentSource
{
    /**
     * @var PaymentSourceType $type
     */
    private PaymentSourceType $type;

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
     * @var bool $threeDS
     */
    private $threeDS;

    /**
     * @var EmulateCode $emulateCode
     */
    private EmulateCode $emulateCode;

    /**
     * @var Mid $mid
     */
    private Mid $mid;

    public function __construct(
        PaymentSourceType $type,
        Number $number,
        ExpirationYear $expirationYear,
        ExpirationMonth $expirationMonth,
        Cvv $cvv,
        $threeDS = false,
        EmulateCode $emulateCode = null,
        Mid $mid = null,
    ) {
        $this->type = $type;
        $this->number = $number;
        $this->expirationYear = $expirationYear;
        $this->expirationMonth = $expirationMonth;
        $this->cvv = $cvv;
        $this->threeDS = $threeDS;
        $this->emulateCode = $emulateCode;
        $this->mid = $mid;
    }

    public function set3ds($threeDS)
    {
        $this->threeDS = $threeDS;
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
            '3ds' => $this->threeDS,
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
