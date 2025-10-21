<?php

namespace Centrobill\Sdk\Entity\Payout;

use Centrobill\Sdk\ValueObject\Address;
use Centrobill\Sdk\ValueObject\City;
use Centrobill\Sdk\ValueObject\Cnpj;
use Centrobill\Sdk\ValueObject\Cpf;
use Centrobill\Sdk\ValueObject\Email;
use Centrobill\Sdk\ValueObject\Evp;
use Centrobill\Sdk\ValueObject\FirstName;
use Centrobill\Sdk\ValueObject\LastName;
use Centrobill\Sdk\ValueObject\PayoutType;
use Centrobill\Sdk\ValueObject\Phone;
use Centrobill\Sdk\ValueObject\Zip;

class PixPayout extends AbstractPayout
{
    private Address $address;

    private City $city;

    private Zip $zip;

    private FirstName $firstName;

    private ?Evp $evp;

    private LastName $lastName;

    private ?Phone $phone;

    private ?Email $email;

    private ?Cpf $cpf;

    private ?Cnpj $cnpj;

    public function __construct(
        Address $address,
        City $city,
        Zip $zip,
        FirstName $firstName,
        LastName $lastName,
        ?Phone $phone = null,
        ?Email $email = null,
        ?Cpf $cpf = null,
        ?Cnpj $cnpj = null,
        ?Evp $evp = null
    ) {
        $this->address = $address;
        $this->city = $city;
        $this->zip = $zip;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->cnpj = $cnpj;
        $this->evp = $evp;
    }

    public function setEvp(?Evp $evp): self
    {
        $this->evp = $evp;
        return $this;
    }

    public function setPhone(?Phone $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function setEmail(?Email $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setCpf(?Cpf $cpf): self
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function setCnpj(?Cnpj $cnpj): self
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'type' => PayoutType::PAYOUT_TYPE_PIX,
            'address' => (string)$this->address,
            'city' => (string)$this->city,
            'zip' => (string)$this->zip,
            'firstName' => (string)$this->firstName,
            'lastName' => (string)$this->lastName,
        ];
        
        if ($this->phone !== null) {
            $data['phone'] = (string)$this->phone;
        }
        
        if ($this->email !== null) {
            $data['email'] = (string)$this->email;
        }
        
        if ($this->cpf !== null) {
            $data['cpf'] = (string)$this->cpf;
        }

        if ($this->cnpj !== null) {
            $data['cnpj'] = (string)$this->cnpj;
        }

        if ($this->evp !== null) {
            $data['evp'] = (string)$this->evp;
        }

        return $data;
    }
}
