<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\AbaNumber;
use Centrobill\Sdk\ValueObject\AccountNumber;
use Centrobill\Sdk\ValueObject\AccountType;
use Centrobill\Sdk\ValueObject\Address;
use Centrobill\Sdk\ValueObject\Blockchain;
use Centrobill\Sdk\ValueObject\City;
use Centrobill\Sdk\ValueObject\Email;
use Centrobill\Sdk\ValueObject\FullName;
use Centrobill\Sdk\ValueObject\Iban;
use Centrobill\Sdk\ValueObject\Payid;
use Centrobill\Sdk\ValueObject\Phone;
use Centrobill\Sdk\ValueObject\State;
use Centrobill\Sdk\ValueObject\Type;
use stdClass;

class Parameters
{
    /**
     * @var Type $type
     */
    private Type $type;

    /**
     * @var Payid $payid
     */
    private Payid $payid;

    /**
     * @var Address $address
     */
    private Address $address;

    /**
     * @var Blockchain $blockchain
     */
    private Blockchain $blockchain;

    /**
     * @var FullName $fullName
     */
    private FullName $fullName;

    /**
     * @var Phone $phone
     */
    private Phone $phone;

    /**
     * @var Email $email
     */
    private Email $email;

    /**
     * @var City $city
     */
    private City $city;

    /**
     * @var State $state
     */
    private State $state;

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
     * @var stdClass $code
     */
    private stdClass $code;

    /**
     * @var Iban $iban
     */
    private Iban $iban;

    public function __construct(
        Type $type,
        Payid $payid,
        Address $address,
        Blockchain $blockchain,
        FullName $fullName,
        AccountType $accountType,
        AbaNumber $abaNumber,
        AccountNumber $accountNumber,
        Iban $iban,
        Phone $phone = null,
        Email $email = null,
        City $city = null,
        State $state = null,
        stdClass $code = null,
    ) {
        $this->type = $type;
        $this->payid = $payid;
        $this->address = $address;
        $this->blockchain = $blockchain;
        $this->fullName = $fullName;
        $this->accountType = $accountType;
        $this->abaNumber = $abaNumber;
        $this->accountNumber = $accountNumber;
        $this->iban = $iban;
        $this->phone = $phone;
        $this->email = $email;
        $this->city = $city;
        $this->state = $state;
        $this->code = $code;
    }

    public function setPhone(Phone $phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function setEmail(Email $email)
    {
        $this->email = $email;
        return $this;
    }

    public function setCity(City $city)
    {
        $this->city = $city;
        return $this;
    }

    public function setState(State $state)
    {
        $this->state = $state;
        return $this;
    }

    public function setCode(stdClass $code)
    {
        $this->code = $code;
        return $this;
    }

    public function toArray()
    {
        $data = [
            'type' => (string)$this->type,
            'payid' => (string)$this->payid,
            'address' => (string)$this->address,
            'blockchain' => (string)$this->blockchain,
            'fullName' => (string)$this->fullName,
            'accountType' => (string)$this->accountType,
            'abaNumber' => (string)$this->abaNumber,
            'accountNumber' => (string)$this->accountNumber,
            'iban' => (string)$this->iban,
        ];

        if ($this->phone !== null) {
            $data['phone'] = (string)$this->phone;
        }

        if ($this->email !== null) {
            $data['email'] = (string)$this->email;
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
