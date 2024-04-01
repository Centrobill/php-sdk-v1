<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use Centrobill\Sdk\ValueObject\Value;

class PaymentSourceConsumer extends AbstractPaymentSource
{
    /**
     * @var PaymentSourceType $type
     */
    private PaymentSourceType $type;

    /**
     * @var Value $value
     */
    private Value $value;

    /**
     * @var EmulateCode $emulateCode
     */
    private EmulateCode $emulateCode;

    public function __construct(PaymentSourceType $type, Value $value, EmulateCode $emulateCode = null)
    {
        $this->type = $type;
        $this->value = $value;
        $this->emulateCode = $emulateCode;
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

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return $data;
    }
}
