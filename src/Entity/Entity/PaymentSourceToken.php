<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\PaymentSource\AbstractPaymentSource;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Type;
use Centrobill\Sdk\ValueObject\Value;
use Centrobill\Sdk\ValueObject\threeds;

class PaymentSourceToken extends AbstractPaymentSource
{
    /**
     * @var Type $type
     */
    private Type $type;

    /**
     * @var Value $value
     */
    private Value $value;

    /**
     * @var threeds $threeds
     */
    private threeds $threeds;

    /**
     * @var EmulateCode $emulateCode
     */
    private EmulateCode $emulateCode;

    public function __construct(Type $type, Value $value, threeds $threeds = null, EmulateCode $emulateCode = null)
    {
        $this->type = $type;
        $this->value = $value;
        $this->threeds = $threeds;
        $this->emulateCode = $emulateCode;
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

    public function toArray()
    {
        $data = [
            'type' => (string)$this->type,
            'value' => (string)$this->value,
        ];

        if ($this->threeds !== null) {
            $data['3ds'] = (string)$this->threeds;
        }

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return $data;
    }
}
