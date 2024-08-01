<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use Centrobill\Sdk\ValueObject\Value;

class PaymentSourceToken extends AbstractPaymentSource
{
    /**
     * @var Value $value
     */
    private Value $value;

    /**
     * @var bool $threeDs
     */
    private $threeDs;

    /**
     * @var ?EmulateCode $emulateCode
     */
    private ?EmulateCode $emulateCode;

    public function __construct(Value $value, $threeDs = false, ?EmulateCode $emulateCode = null)
    {
        $this->value = $value;
        $this->threeDs = $threeDs;
        $this->emulateCode = $emulateCode;
    }

    public function set3ds($threeDs): self
    {
        $this->threeDs = $threeDs;
        return $this;
    }

    public function setEmulateCode(EmulateCode $emulateCode): self
    {
        $this->emulateCode = $emulateCode;
        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'type' => PaymentSourceType::PAYMENT_SOURCE_TOKEN,
            'value' => (string)$this->value,
        ];

        if ($this->threeDs !== null) {
            $data['3ds'] = $this->threeDs;
        }

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return $data;
    }
}
