<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\Entity\MpiParameters;
use Centrobill\Sdk\Exception\CardException;
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
     * @var ?bool $threeDS
     */
    private ?bool $threeDS;

    /**
     * @var ?EmulateCode $emulateCode
     */
    private ?EmulateCode $emulateCode;

    /**
     * @var MpiParameters|null $mpiParameters
     */
    private ?MpiParameters $mpiParameters;

    public function __construct(
        Number $number,
        ExpirationYear $expirationYear,
        ExpirationMonth $expirationMonth,
        Cvv $cvv,
        ?bool $threeDS = null,
        ?EmulateCode $emulateCode = null,
        ?Mid $mid = null,
        ?MpiParameters $mpiParameters = null
    ) {
        if ((string)$expirationYear == date('y') && (string)$expirationMonth < date('m')) {
            throw CardException::expired();
        }

        $this->number = $number;
        $this->expirationYear = $expirationYear;
        $this->expirationMonth = $expirationMonth;
        $this->cvv = $cvv;
        $this->threeDS = $threeDS;
        $this->emulateCode = $emulateCode;
        $this->mid = $mid;
        $this->mpiParameters = $mpiParameters;
    }

    public function isThreeDS(): bool
    {
        return (bool)$this->threeDS;
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

    public function setMpiParameters(MpiParameters $mpiParameters): self
    {
        $this->mpiParameters = $mpiParameters;
        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'type' => $this->getType(),
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

        if ($this->mpiParameters !== null) {
            $data['mpiParameters'] = $this->mpiParameters->toArray();
        }

        return array_merge($data, parent::toArray());
    }

    public function getType(): string
    {
        return PaymentSourceType::PAYMENT_SOURCE_CARD;
    }
}
