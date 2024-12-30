<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\ApplePayPayload;
use Centrobill\Sdk\ValueObject\PaymentSourceType;

class PaymentSourceApplePay extends AbstractPaymentSource
{
    /**
     * @var ApplePayPayload $payload
     */
    private ApplePayPayload $payload;

    /**
     * @var ?EmulateCode $emulateCode
     */
    private ?EmulateCode $emulateCode;

    public function __construct(ApplePayPayload $payload, ?EmulateCode $emulateCode = null)
    {
        $this->payload = $payload;
        $this->emulateCode = $emulateCode;
    }

    public function setEmulateCode(EmulateCode $emulateCode): self
    {
        $this->emulateCode = $emulateCode;
        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'type' => PaymentSourceType::PAYMENT_SOURCE_APPLEPAY,
            'token' => $this->payload->getPayload(),
        ];

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return array_merge($data, parent::toArray());
    }
}
