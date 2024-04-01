<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Token;
use Centrobill\Sdk\ValueObject\PaymentSourceType;

class PaymentSourceApplePay extends AbstractPaymentSource
{
    /**
     * @var Token $token
     */
    private Token $token;

    /**
     * @var ?EmulateCode $emulateCode
     */
    private ?EmulateCode $emulateCode;

    public function __construct(Token $token, ?EmulateCode $emulateCode = null)
    {
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
            'type' => PaymentSourceType::PAYMENT_SOURCE_APPLEPAY,
            'token' => (string)$this->token,
        ];

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return $data;
    }
}
