<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\Bin;
use Centrobill\Sdk\ValueObject\Domain;
use Centrobill\Sdk\ValueObject\EmulateCode;
use Centrobill\Sdk\ValueObject\Method;
use Centrobill\Sdk\ValueObject\Mid;
use Centrobill\Sdk\ValueObject\Secure;
use Centrobill\Sdk\ValueObject\Selected;
use Centrobill\Sdk\ValueObject\TerminalMode;
use Centrobill\Sdk\ValueObject\Test;

class Payment
{
    /**
     * @var array<Method> $method
     */
    private $method;

    /**
     * @var Selected $selected
     */
    private Selected $selected;

    /**
     * @var Secure $secure
     */
    private Secure $secure;

    /**
     * @var Test $test
     */
    private Test $test;

    /**
     * @var EmulateCode $emulateCode
     */
    private EmulateCode $emulateCode;

    /**
     * @var Mid $mid
     */
    private Mid $mid;

    /**
     * @var TerminalMode $terminalMode
     */
    private TerminalMode $terminalMode;

    /**
     * @var Bin $bin
     */
    private Bin $bin;

    /**
     * @var Domain $domain
     */
    private Domain $domain;

    public function __construct(
        $method = [],
        Selected $selected = null,
        Secure $secure = null,
        Test $test = null,
        EmulateCode $emulateCode = null,
        Mid $mid = null,
        TerminalMode $terminalMode = null,
        Bin $bin = null,
        Domain $domain = null,
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

    public function setSelected(Selected $selected)
    {
        $this->selected = $selected;
        return $this;
    }

    public function setSecure(Secure $secure)
    {
        $this->secure = $secure;
        return $this;
    }

    public function setTest(Test $test)
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

    public function setDomain(Domain $domain)
    {
        $this->domain = $domain;
        return $this;
    }

    public function toArray()
    {
        $data = [];

        if ($this->method !== null) {
            $data['method'] = $this->method;
        }

        if ($this->selected !== null) {
            $data['selected'] = (string)$this->selected;
        }

        if ($this->secure !== null) {
            $data['secure'] = (string)$this->secure;
        }

        if ($this->test !== null) {
            $data['test'] = (string)$this->test;
        }

        if ($this->emulateCode !== null) {
            $data['emulateCode'] = (string)$this->emulateCode;
        }

        if ($this->mid !== null) {
            $data['mid'] = (string)$this->mid;
        }

        if ($this->terminalMode !== null) {
            $data['terminalMode'] = (string)$this->terminalMode;
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
