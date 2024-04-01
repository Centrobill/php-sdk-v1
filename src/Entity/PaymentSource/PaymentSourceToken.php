<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use Centrobill\Sdk\ValueObject\Value;
use Centrobill\Sdk\ValueObject\threeDs;

class PaymentSourceToken extends AbstractPaymentSource
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
     * @var bool $threeDs
     */
    private $threeDs;

    /**
     * @var EmulateCode $emulateCode
     */
    private EmulateCode $emulateCode;

    public function __construct(PaymentSourceType $type, Value $value, $threeDs = false, EmulateCode $emulateCode = null)
    {
        $this->type = $type;
        $this->value = $value;
        $this->threeDs = $threeDs;
        $this->emulateCode = $emulateCode;
    }

    public function set3ds($threeDs)
    {
        $this->threeDs = $threeDs;
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

        if ($this->threeDs !== null) {
            $data['3ds'] = (string)$this->threeDs;
        }

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return $data;
    }
}
