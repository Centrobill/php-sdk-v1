<?php

namespace Centrobill\Sdk\Entity\Payout;

use Centrobill\Sdk\ValueObject\Payid;
use Centrobill\Sdk\ValueObject\PayoutType;

class PayIdPayout extends AbstractPayout
{
    /**
     * @var Payid $payId
     */
    private Payid $payId;

    public function __construct(
        Payid $payId
    ) {
        $this->payId = $payId;
    }

    public function toArray(): array
    {
        return [
            'type' => PayoutType::PAYOUT_TYPE_PAYID,
            'payId' => (string)$this->payId,
        ];
    }
}
