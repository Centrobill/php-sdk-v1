<?php

namespace Centrobill\Sdk\Entity\Payout;

use Centrobill\Sdk\ValueObject\FullName;
use Centrobill\Sdk\ValueObject\Iban;
use Centrobill\Sdk\ValueObject\PayoutType;

class SepaPayout extends AbstractPayout
{
    /**
     * @var Iban $iban
     */
    private Iban $iban;

    /**
     * @var FullName $fullName
     */
    private FullName $fullName;

    public function __construct(
        Iban $iban,
        FullName $fullName
    ) {
        $this->iban = $iban;
        $this->fullName = $fullName;
    }

    public function toArray(): array
    {
        return [
            'type' => PayoutType::PAYOUT_TYPE_SEPA,
            'iban' => (string)$this->iban,
            'full_name' => (string)$this->fullName,
        ];
    }
}
