<?php

namespace Centrobill\Sdk\Entity\Payout;

use Centrobill\Sdk\ValueObject\AccountNumber;
use Centrobill\Sdk\ValueObject\Address;
use Centrobill\Sdk\ValueObject\BankBranch;
use Centrobill\Sdk\ValueObject\BankBranchCode;
use Centrobill\Sdk\ValueObject\BankCode;
use Centrobill\Sdk\ValueObject\BankName;
use Centrobill\Sdk\ValueObject\City;
use Centrobill\Sdk\ValueObject\CountryIso2;
use Centrobill\Sdk\ValueObject\DocumentId;
use Centrobill\Sdk\ValueObject\DocumentType;
use Centrobill\Sdk\ValueObject\Email;
use Centrobill\Sdk\ValueObject\FirstName;
use Centrobill\Sdk\ValueObject\LastName;
use Centrobill\Sdk\ValueObject\PayoutType;
use Centrobill\Sdk\ValueObject\Phone;
use Centrobill\Sdk\ValueObject\State;
use Centrobill\Sdk\ValueObject\Zip;

class BanktransferPayout extends AbstractPayout
{
    private FirstName $firstName;

    private LastName $lastName;

    private Email $email;

    private Phone $phone;

    private State $state;

    private Zip $zip;

    private CountryIso2 $country;

    private BankCode $bankCode;

    private BankName $bankName;

    private BankBranch $bankBranch;

    private BankBranchCode $bankBranchCode;

    private AccountNumber $accountNumber;

    private ?Address $bankAddress;

    private ?DocumentId $documentId;

    private ?DocumentType $documentType;

    private ?City $city;

    private ?Address $address;

    public function __construct(
        FirstName $firstName,
        LastName $lastName,
        Email $email,
        Phone $phone,
        State $state,
        Zip $zip,
        CountryIso2 $country,
        BankCode $bankCode,
        BankName $bankName,
        BankBranch $bankBranch,
        BankBranchCode $bankBranchCode,
        AccountNumber $accountNumber,
        City $city = null,
        Address $address = null,
        Address $bankAddress = null,
        DocumentId $documentId = null,
        DocumentType $documentType = null
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->state = $state;
        $this->zip = $zip;
        $this->country = $country;
        $this->bankCode = $bankCode;
        $this->bankName = $bankName;
        $this->bankBranch = $bankBranch;
        $this->bankBranchCode = $bankBranchCode;
        $this->accountNumber = $accountNumber;
        $this->city = $city;
        $this->address = $address;
        $this->bankAddress = $bankAddress;
        $this->documentId = $documentId;
        $this->documentType = $documentType;
    }

    public function setDocumentId(?DocumentId $documentId): self
    {
        $this->documentId = $documentId;
        return $this;
    }

    public function setDocumentType(?DocumentType $documentType): self
    {
        $this->documentType = $documentType;
        return $this;
    }

    public function setBankAddress(?Address $bankAddress): self
    {
        $this->bankAddress = $bankAddress;
        return $this;
    }

    public function setCity(?City $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function setAddress(?Address $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'type' => PayoutType::PAYOUT_TYPE_BANKTRANSFER,
            'firstName' => (string)$this->firstName,
            'lastName' => (string)$this->lastName,
            'email' => (string)$this->email,
            'phone' => (string)$this->phone,
            'state' => (string)$this->state,
            'zip' => (string)$this->zip,
            'countryCode' => (string)$this->country,
            'bankCode' => (string)$this->bankCode,
            'bankName' => (string)$this->bankName,
            'bankBranch' => (string)$this->bankBranch,
            'bankBranchCode' => (string)$this->bankBranchCode,
            'accountNumber' => (string)$this->accountNumber,
        ];

        if ($this->city !== null) {
            $data['city'] = (string)$this->city;
        }

        if ($this->address !== null) {
            $data['address'] = (string)$this->address;
        }

        if ($this->bankAddress !== null) {
            $data['bankAddress'] = (string)$this->bankAddress;
        }

        if ($this->documentId !== null) {
            $data['documentId'] = (string)$this->documentId;
        }

        if ($this->documentType !== null) {
            $data['documentType'] = (string)$this->documentType;
        }

        return $data;
    }
}
