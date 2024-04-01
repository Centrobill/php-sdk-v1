<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\PaymentSourceType;

class PaymentSourceCrypto extends AbstractPaymentSource
{
    /**
     * @var PaymentSourceType $type
     */
    private PaymentSourceType $type;

    /**
     * @var EmulateCode $emulateCode
     */
    private EmulateCode $emulateCode;

    public function __construct(PaymentSourceType $type, EmulateCode $emulateCode = null)
    {
        $this->type = $type;
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
        ];

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return $data;
    }
}
