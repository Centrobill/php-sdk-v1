<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\PaymentAccountId;
use Centrobill\Sdk\ValueObject\PaymentSourceType;

class PaymentSourcePaymentAccountIdWithCvv extends AbstractPaymentSource
{
    /**
     * @var PaymentAccountId $paymentAccountId
     */
    private PaymentAccountId $paymentAccountId;

    /**
     * @var Cvv $cvv
     */
    private Cvv $cvv;

    /**
     * @var ?EmulateCode $emulateCode
     */
    private ?EmulateCode $emulateCode;

    public function __construct(
        PaymentAccountId $paymentAccountId,
        Cvv $cvv,
        ?EmulateCode $emulateCode = null
    ) {
        $this->paymentAccountId = $paymentAccountId;
        $this->cvv = $cvv;
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
            'type' => PaymentSourceType::PAYMENT_SOURCE_PAYMENT_ACCOUNT_ID_WITH_CVV,
            'paymentAccountId' => (string)$this->paymentAccountId,
            'cvv' => (string)$this->cvv,
        ];

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return $data;
    }
}
