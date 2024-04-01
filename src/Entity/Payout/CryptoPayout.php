<?php

namespace Centrobill\Sdk\Entity\Payout;

use Centrobill\Sdk\ValueObject\Blockchain;
use Centrobill\Sdk\ValueObject\CryptoAddress;
use Centrobill\Sdk\ValueObject\PayoutType;

class CryptoPayout extends AbstractPayout
{
    /**
     * @var CryptoAddress $address
     */
    private CryptoAddress $address;

    /**
     * @var Blockchain $currency
     */
    private Blockchain $currency;

    public function __construct(
        CryptoAddress $address,
        Blockchain $currency
    ) {
        $this->address = $address;
        $this->currency = $currency;
    }

    public function toArray(): array
    {
        $data = [
            'type' => PayoutType::PAYOUT_TYPE_CRYPTO,
            'address' => (string)$this->address,
            'currency' => (string)$this->currency,
        ];

        return $data;
    }
}
