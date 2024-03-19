<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\PaymentSource\AbstractPaymentSource;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\PaymentAccountId;
use Centrobill\Sdk\ValueObject\Type;

class PaymentSourcePaymentAccountId extends AbstractPaymentSource
{
    /**
     * @var Type $type
     */
    private Type $type;

    /**
     * @var PaymentAccountId $paymentAccountId
     */
    private PaymentAccountId $paymentAccountId;

    /**
     * @var EmulateCode $emulateCode
     */
    private EmulateCode $emulateCode;

    public function __construct(Type $type, PaymentAccountId $paymentAccountId, EmulateCode $emulateCode = null)
    {
        $this->type = $type;
        $this->paymentAccountId = $paymentAccountId;
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
            'paymentAccountId' => (string)$this->paymentAccountId,
        ];

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return $data;
    }
}
