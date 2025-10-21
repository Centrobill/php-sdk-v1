<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\Cpf;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentSourceType;

class PaymentSourcePix extends AbstractPaymentSource
{
    /**
     * @var ?Cpf $cpf
     */
    private ?Cpf $cpf;

    /**
     * @var ?EmulateCode $emulateCode
     */
    private ?EmulateCode $emulateCode;

    public function __construct(?Cpf $cpf = null, ?Mid $mid = null, ?EmulateCode $emulateCode = null)
    {
        $this->cpf = $cpf;
        $this->mid = $mid;
        $this->emulateCode = $emulateCode;
    }

    public function setCpf(Cpf $cpf): self
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function setMid(Mid $mid): self
    {
        $this->mid = $mid;
        return $this;
    }

    public function setEmulateCode(EmulateCode $emulateCode): self
    {
        $this->emulateCode = $emulateCode;
        return $this;
    }

    public function toArray(): array
    {
        $data = [
            'type' => $this->getType(),
        ];

        if ($this->cpf !== null) {
            $data['cpf'] = (string)$this->cpf;
        }

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        return array_merge($data, parent::toArray());
    }

    public function getType(): string
    {
        return PaymentSourceType::PAYMENT_SOURCE_PIX;
    }
}
