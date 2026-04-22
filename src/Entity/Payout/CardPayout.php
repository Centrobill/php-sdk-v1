<?php

namespace Centrobill\Sdk\Entity\Payout;

use Centrobill\Sdk\ValueObject\ExpirationMonth;
use Centrobill\Sdk\ValueObject\ExpirationYear;
use Centrobill\Sdk\ValueObject\FirstName;
use Centrobill\Sdk\ValueObject\LastName;
use Centrobill\Sdk\ValueObject\Number;
use Centrobill\Sdk\ValueObject\PayoutType;
use DateTimeImmutable;

class CardPayout extends AbstractPayout
{
    /**
     * @var Number $number
     */
    private Number $number;

    /**
     * @var FirstName $firstName
     */
    private FirstName $firstName;

    /**
     * @var LastName $lastName
     */
    private LastName $lastName;

    /**
     * @var ExpirationMonth $expirationMonth
     */
    private ExpirationMonth $expirationMonth;

    /**
     * @var ExpirationYear $expirationYear
     */
    private ExpirationYear $expirationYear;

    /**
     * @var ?DateTimeImmutable $birthDate
     */
    private ?DateTimeImmutable $birthDate;

    public function __construct(
        Number             $number,
        FirstName          $firstName,
        LastName           $lastName,
        ExpirationMonth    $expirationMonth,
        ExpirationYear     $expirationYear,
        ?DateTimeImmutable $birthDate
    ) {
        $this->number      = $number;
        $this->firstName   = $firstName;
        $this->lastName    = $lastName;
        $this->expirationMonth = $expirationMonth;
        $this->expirationYear  = $expirationYear;
        $this->birthDate   = $birthDate;
    }

    public function setBirthDate(?DateTimeImmutable $birthDate): self
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'type' => PayoutType::PAYOUT_TYPE_CARD,
            'number' => (string)$this->number,
            'firstName' => (string)$this->firstName,
            'lastName' => (string)$this->lastName,
            'expirationMonth' => (string)$this->expirationMonth,
            'expirationYear' => (string)$this->expirationYear,
        ];

        if ($this->birthDate !== null) {
            $data['birthDate'] = $this->birthDate->format('Y-m-d');
        }

        return $data;
    }
}
