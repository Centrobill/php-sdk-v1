<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\PaymentSource\AbstractPaymentSource;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Token;
use Centrobill\Sdk\ValueObject\Type;

class PaymentSourceApplePay extends AbstractPaymentSource
{
    /**
     * @var Type $type
     */
    private Type $type;

    /**
     * @var Token $token
     */
    private Token $token;

    /**
     * @var EmulateCode $emulateCode
     */
    private EmulateCode $emulateCode;

    public function __construct(Type $type, Token $token, EmulateCode $emulateCode = null)
    {
        $this->type = $type;
        $this->token = $token;
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
            'token' => (string)$this->token,
        ];

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return $data;
    }
}
