<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\CardHolder;
use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\ExpirationMonth;
use Centrobill\Sdk\ValueObject\ExpirationYear;
use Centrobill\Sdk\ValueObject\Number;
use Centrobill\Sdk\ValueObject\Zip;

class GenerateCardDataTokenRequest implements RequestInterface
{
    public function __construct(
        private Number $number,
        private ExpirationYear $expirationYear,
        private ExpirationMonth $expirationMonth,
        private ?Cvv $cvv = null,
        private ?CardHolder $cardHolder = null,
        private ?Zip $zip = null,
    ) {
        $this->number = $number;
        $this->expirationYear = $expirationYear;
        $this->expirationMonth = $expirationMonth;
        $this->cvv = $cvv;
        $this->cardHolder = $cardHolder;
        $this->zip = $zip;
    }

    public function setCvv(Cvv $cvv): static
    {
        $this->cvv = $cvv;
        return $this;
    }

    public function setCardHolder(CardHolder $cardHolder): static
    {
        $this->cardHolder = $cardHolder;
        return $this;
    }

    public function setZip(Zip $zip): static
    {
        $this->zip = $zip;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [
            'number' => (string)$this->number,
            'expirationYear' => (string)$this->expirationYear,
            'expirationMonth' => (string)$this->expirationMonth,
        ];

        if ($this->cvv !== null) {
            $data['cvv'] = (string)$this->cvv;
        }

        if ($this->cardHolder !== null) {
            $data['cardHolder'] = (string)$this->cardHolder;
        }

        if ($this->zip !== null) {
            $data['zip'] = (string)$this->zip;
        }

        return $data;
    }

    public function getUri(): string
    {
        return '/tokenize';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }
}
