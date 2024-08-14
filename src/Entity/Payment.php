<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\Bin;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentMethod;
use Centrobill\Sdk\ValueObject\SiteName;

class Payment
{
    /**
     * @var array<PaymentMethod> $method
     */
    private $method;

    /**
     * @var ?PaymentMethod $selected
     */
    private ?PaymentMethod $selected;

    /**
     * @var bool|null $secure
     */
    private $secure;

    /**
     * @var bool|null $test
     */
    private $test;

    /**
     * @var ?EmulateCode $emulateCode
     */
    private ?EmulateCode $emulateCode;

    /**
     * @var ?Mid $mid
     */
    private ?Mid $mid;

    /**
     * @var bool|null $terminalMode
     */
    private $terminalMode;

    /**
     * @var ?Bin $bin
     */
    private ?Bin $bin;

    /**
     * @var ?SiteName $domain
     */
    private ?SiteName $domain;

    public function __construct(
        $method = [],
        ?PaymentMethod $selected = null,
        ?EmulateCode $emulateCode = null,
        ?Mid $mid = null,
        ?Bin $bin = null,
        ?SiteName $domain = null,
        $terminalMode = null,
        $secure = null,
        $test = null
    ) {
        $this->method = $method;
        $this->selected = $selected;
        $this->secure = $secure;
        $this->test = $test;
        $this->emulateCode = $emulateCode;
        $this->mid = $mid;
        $this->terminalMode = $terminalMode;
        $this->bin = $bin;
        $this->domain = $domain;
    }

    public function setMethod($method): self
    {
        $this->method = $method;
        return $this;
    }

    public function setSelected($selected): self
    {
        $this->selected = $selected;
        return $this;
    }

    public function setSecure($secure): self
    {
        $this->secure = $secure;
        return $this;
    }

    public function setTest($test): self
    {
        $this->test = $test;
        return $this;
    }

    public function setEmulateCode(EmulateCode $emulateCode): self
    {
        $this->emulateCode = $emulateCode;
        return $this;
    }

    public function setMid(Mid $mid): self
    {
        $this->mid = $mid;
        return $this;
    }

    public function setTerminalMode($terminalMode): self
    {
        $this->terminalMode = $terminalMode;
        return $this;
    }

    public function setBin(Bin $bin): self
    {
        $this->bin = $bin;
        return $this;
    }

    public function setDomain(SiteName $domain): self
    {
        $this->domain = $domain;
        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->secure !== null) {
            $data['secure'] = $this->secure;
        }

        if ($this->test !== null) {
            $data['test'] = $this->test;
        }

        if ($this->terminalMode !== null) {
            $data['terminalMode'] = $this->terminalMode;
        }

        $data['method'] = array_map(function ($item) {
            return (string)$item;
        }, $this->method);

        if ($this->selected !== null) {
            $data['selected'] = (string)$this->selected;
        }

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        if ($this->mid !== null) {
            $data['mid'] = (string)$this->mid;
        }

        if ($this->bin !== null) {
            $data['bin'] = (string)$this->bin;
        }

        if ($this->domain !== null) {
            $data['domain'] = (string)$this->domain;
        }

        return $data;
    }
}
