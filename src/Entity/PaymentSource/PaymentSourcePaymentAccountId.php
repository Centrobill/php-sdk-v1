<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\PaymentAccountId;
use Centrobill\Sdk\ValueObject\PaymentSourceType;

class PaymentSourcePaymentAccountId extends AbstractPaymentSource
{
    /**
     * @var PaymentAccountId $paymentAccountId
     */
    private PaymentAccountId $paymentAccountId;

    /**
     * @var ?EmulateCode $emulateCode
     */
    private ?EmulateCode $emulateCode;

    public function __construct(PaymentAccountId $paymentAccountId, ?EmulateCode $emulateCode = null)
    {
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
            'type' => PaymentSourceType::PAYMENT_SOURCE_PAYMENTACCOUNTID,
            'paymentAccountId' => (string)$this->paymentAccountId,
        ];

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return $data;
    }
}
