<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\Bic;
use Centrobill\Sdk\ValueObject\Bin;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;

class PaymentSourceOnlineBanking extends AbstractPaymentSource
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
     * @var ?Bin $bin
     */
    private ?Bin $bin;

    public function __construct(
        ?Bic $bic = null,
        ?EmulateCode $emulateCode = null,
        ?Mid $mid = null,
        ?Bin $bin = null
    ) {
        $this->bic = $bic;
        $this->emulateCode = $emulateCode;
        $this->mid = $mid;
        $this->bin = $bin;
    }

    public function setBic(Bic $bic): self
    {
        $this->bic = $bic;
        return $this;
    }

    public function setEmulateCode(EmulateCode $emulateCode): self
    {
        $this->emulateCode = $emulateCode;
        return $this;
    }

    public function setBin(Bin $bin): self
    {
        $this->bin = $bin;
        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'type' => PaymentSourceType::PAYMENT_SOURCE_ONLINEBANKING,
        ];

        if ($this->bic !== null) {
            $data['bic'] = (string)$this->bic;
        }

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        if ($this->bin !== null) {
            $data['bin'] = (string)$this->bin;
        }

        return array_merge($data, parent::toArray());
    }
}
