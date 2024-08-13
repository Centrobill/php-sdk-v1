<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\ExpirationMonth;
use Centrobill\Sdk\ValueObject\ExpirationYear;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\Number;
use Centrobill\Sdk\ValueObject\PaymentSourceType;

class PaymentSourceCard extends AbstractPaymentSource
{
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
     * @var bool|null $threeDS
     */
    private $threeDS;

    /**
     * @var ?EmulateCode $emulateCode
     */
    private ?EmulateCode $emulateCode;

    /**
     * @var ?Mid $mid
     */
    private ?Mid $mid;

    public function __construct(
        Number $number,
        ExpirationYear $expirationYear,
        ExpirationMonth $expirationMonth,
        Cvv $cvv,
        $threeDS = null,
        ?EmulateCode $emulateCode = null,
        ?Mid $mid = null
    ) {
        $this->number = $number;
        $this->expirationYear = $expirationYear;
        $this->expirationMonth = $expirationMonth;
        $this->cvv = $cvv;
        $this->threeDS = $threeDS;
        $this->emulateCode = $emulateCode;
        $this->mid = $mid;
    }

    public function set3ds($threeDS): self
    {
        $this->threeDS = $threeDS;
        return $this;
    }

    public function setEmulateCode(EmulateCode $emulateCode): self
    {
        $this->emulateCode = $emulateCode;
        return $this;
    }

    public function setMid(Mid $mid): self
    {
        $this->mid = $mid;
        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'type' => PaymentSourceType::PAYMENT_SOURCE_CARD,
            'number' => (string)$this->number,
            'expirationYear' => (string)$this->expirationYear,
            'expirationMonth' => (string)$this->expirationMonth,
            'cvv' => (string)$this->cvv,
        ];

        if ($this->threeDS !== null) {
            $data['threeDS'] = $this->threeDS;
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
