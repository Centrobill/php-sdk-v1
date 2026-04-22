<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\Email;
use Centrobill\Sdk\ValueObject\Ip;

class PayoutConsumer
{
    private ?Email $email;

    private ?Ip $ip;

    public function __construct(?Email $email, ?Ip $ip) {
        $this->email = $email;
        $this->ip = $ip;
    }

    public function getEmail(): ?Email
    {
        return $this->email;
    }

    public function getIp(): ?Ip
    {
        return $this->ip;
    }

    public function setEmail(Email $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setIp(Ip $ip): self
    {
        $this->ip = $ip;
        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->email !== null) {
            $data['email'] = (string)$this->email;
        }

        if ($this->ip !== null) {
            $data['ip'] = (string)$this->ip;
        }

        return $data;
    }
}
