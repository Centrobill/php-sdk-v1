<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\Url;

class PaymentUrl
{
    /**
     * @var ?Url $ipnUrl
     */
    private ?Url $ipnUrl;

    /**
     * @var ?Url $redirectUrl
     */
    private ?Url $redirectUrl;

    public function __construct(?Url $ipnUrl = null, ?Url $redirectUrl = null)
    {
        $this->ipnUrl = $ipnUrl;
        $this->redirectUrl = $redirectUrl;
    }

    public function setIpnUrl(Url $ipnUrl)
    {
        $this->ipnUrl = $ipnUrl;
        return $this;
    }

    public function setRedirectUrl(Url $redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    public function toArray()
    {
        $data = [];

        if ($this->ipnUrl !== null) {
            $data['ipnUrl'] = (string)$this->ipnUrl;
        }

        if ($this->redirectUrl !== null) {
            $data['redirectUrl'] = (string)$this->redirectUrl;
        }

        return $data;
    }
}
