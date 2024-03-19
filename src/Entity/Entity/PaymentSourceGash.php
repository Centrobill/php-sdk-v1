<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\PaymentSource\AbstractPaymentSource;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\Type;

class PaymentSourceGash extends AbstractPaymentSource
{
    /**
     * @var Type $type
     */
    private Type $type;

    /**
     * @var EmulateCode $emulateCode
     */
    private EmulateCode $emulateCode;

    /**
     * @var Mid $mid
     */
    private Mid $mid;

    public function __construct(Type $type, EmulateCode $emulateCode = null, Mid $mid = null)
    {
        $this->type = $type;
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
            'type' => (string)$this->type,
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
