<?php

namespace Centrobill\Sdk\Entity\Payout;

use Centrobill\Sdk\ValueObject\AbaNumber;
use Centrobill\Sdk\ValueObject\AccountNumber;
use Centrobill\Sdk\ValueObject\AccountType;
use Centrobill\Sdk\ValueObject\Address;
use Centrobill\Sdk\ValueObject\City;
use Centrobill\Sdk\ValueObject\Code;
use Centrobill\Sdk\ValueObject\Email;
use Centrobill\Sdk\ValueObject\FullName;
use Centrobill\Sdk\ValueObject\PayoutType;
use Centrobill\Sdk\ValueObject\Phone;
use Centrobill\Sdk\ValueObject\State;

class AchPayout extends AbstractPayout
{
    /**
     * @var FullName $fullName
     */
    private FullName $fullName;

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

    /**
     * @var ?Phone $phone
     */
    private ?Phone $phone;

    /**
     * @var ?Email $email
     */
    private ?Email $email;

    /**
     * @var ?Address $address
     */
    private ?Address $address;

    /**
     * @var ?City $city
     */
    private ?City $city;

    /**
     * @var ?State $state
     */
    private ?State $state;

    /**
     * @var ?Code $code
     */
    private ?Code $code;

    public function __construct(
        FullName $fullName,
        AccountType $accountType,
        AbaNumber $abaNumber,
        AccountNumber $accountNumber,
        ?Phone $phone,
        ?Email $email,
        ?Address $address,
        ?City $city,
        ?State $state,
        ?Code $code
    ) {
        $this->fullName = $fullName;
        $this->accountType = $accountType;
        $this->abaNumber = $abaNumber;
        $this->accountNumber = $accountNumber;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->code = $code;
    }

    public function toArray(): array
    {
        $data = [
            'type' => PayoutType::PAYOUT_TYPE_ACH,
            'fullName' => (string)$this->fullName,
            'accountType' => (string)$this->accountType,
            'abaNumber' => (string)$this->abaNumber,
            'accountNumber' => (string)$this->accountNumber,
        ];

        if ($this->phone !== null) {
            $data['phone'] = (string)$this->phone;
        }

        if ($this->email !== null) {
            $data['email'] = (string)$this->email;
        }

        if ($this->address !== null) {
            $data['address'] = (string)$this->address;
        }

        if ($this->city !== null) {
            $data['city'] = (string)$this->city;
        }

        if ($this->state !== null) {
            $data['state'] = (string)$this->state;
        }

        if ($this->code !== null) {
            $data['code'] = (string)$this->code;
        }

        return $data;
    }
}
