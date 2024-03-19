<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\PaymentSource\AbstractPaymentSource;
use Centrobill\Sdk\ValueObject\AbaNumber;
use Centrobill\Sdk\ValueObject\AccountNumber;
use Centrobill\Sdk\ValueObject\AccountType;
use Centrobill\Sdk\ValueObject\Type;

class PaymentSourceAch extends AbstractPaymentSource
{
    /**
     * @var Type $type
     */
    private Type $type;

    /**
     * @var AccountType $accountType
     */
    private AccountType $accountType;

    /**
     * @var AbaNumber $abaNumber
     */
    private AbaNumber $abaNumber;

    /**
     * @var AccountNumber $accountNumber
     */
    private AccountNumber $accountNumber;

    public function __construct(
        Type $type,
        AccountType $accountType,
        AbaNumber $abaNumber,
        AccountNumber $accountNumber,
    ) {
        $this->type = $type;
        $this->accountType = $accountType;
        $this->abaNumber = $abaNumber;
        $this->accountNumber = $accountNumber;
    }

    public function toArray()
    {
        $data = [
            'type' => (string)$this->type,
            'accountType' => (string)$this->accountType,
            'abaNumber' => (string)$this->abaNumber,
            'accountNumber' => (string)$this->accountNumber,
        ];

        return $data;
    }
}
