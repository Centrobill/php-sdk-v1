<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\Bin;
use Centrobill\Sdk\ValueObject\DomainName;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\PaymentMethod;
use Centrobill\Sdk\ValueObject\TerminalMode;

class Payment
{
    /**
     * @var array<PaymentMethod> $method
     */
    private $method;

    /**
     * @var PaymentMethod $selected
     */
    private PaymentMethod $selected;

    /**
     * @var bool $secure
     */
    private $secure;

    /**
     * @var bool $test
     */
    private $test;

    /**
     * @var bool $emulateCode
     */
    private $emulateCode;

    /**
     * @var Mid $mid
     */
    private Mid $mid;

    /**
     * @var bool $terminalMode
     */
    private $terminalMode;

    /**
     * @var Bin $bin
     */
    private Bin $bin;

    /**
     * @var DomainName $domain
     */
    private DomainName $domain;

    public function __construct(
        $method = [],
        PaymentMethod $selected = null,
        EmulateCode $emulateCode = null,
        Mid $mid = null,
        Bin $bin = null,
        DomainName $domain = null,
        $terminalMode = false,
        $secure = false,
        $test = false
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

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function setSelected($selected)
    {
        $this->selected = $selected;
        return $this;
    }

    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    public function setTest($test)
    {
        $this->test = $test;
        return $this;
    }

    public function setEmulateCode(EmulateCode $emulateCode)
    {
        $this->emulateCode = $emulateCode;
        return $this;
    }

    public function setMid(Mid $mid)
    {
        $this->mid = $mid;
        return $this;
    }

    public function setTerminalMode(TerminalMode $terminalMode)
    {
        $this->terminalMode = $terminalMode;
        return $this;
    }

    public function setBin(Bin $bin)
    {
        $this->bin = $bin;
        return $this;
    }

    public function setDomain(DomainName $domain)
    {
        $this->domain = $domain;
        return $this;
    }

    public function toArray()
    {
        $data = [
            'secure' => $this->secure,
            'test' => $this->test,
            'terminalMode' => $this->terminalMode,
        ];

        $data['method'] = array_map(function($item) {
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
