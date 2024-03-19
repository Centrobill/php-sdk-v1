<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\PaymentSource\AbstractPaymentSource;
use Centrobill\Sdk\ValueObject\Bic;
use Centrobill\Sdk\ValueObject\Bin;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\Type;

class PaymentSourceOnlinebanking extends AbstractPaymentSource
{
    /**
     * @var Type $type
     */
    private Type $type;

    /**
     * @var Bic $bic
     */
    private Bic $bic;

    /**
     * @var EmulateCode $emulateCode
     */
    private EmulateCode $emulateCode;

    /**
     * @var Mid $mid
     */
    private Mid $mid;

    /**
     * @var Bin $bin
     */
    private Bin $bin;

    public function __construct(
        Type $type,
        Bic $bic = null,
        EmulateCode $emulateCode = null,
        Mid $mid = null,
        Bin $bin = null,
    ) {
        $this->type = $type;
        $this->bic = $bic;
        $this->emulateCode = $emulateCode;
        $this->mid = $mid;
        $this->bin = $bin;
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

    public function setBin(Bin $bin)
    {
        $this->bin = $bin;
        return $this;
    }

    public function toArray()
    {
        $data = [
            'type' => (string)$this->type,
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

        if ($this->bin !== null) {
            $data['bin'] = (string)$this->bin;
        }

        return $data;
    }
}
