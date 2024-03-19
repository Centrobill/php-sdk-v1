<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\IpnUrl;
use Centrobill\Sdk\ValueObject\RedirectUrl;

class PaymentUrl
{
    /**
     * @var IpnUrl $ipnUrl
     */
    private IpnUrl $ipnUrl;

    /**
     * @var RedirectUrl $redirectUrl
     */
    private RedirectUrl $redirectUrl;

    public function __construct(IpnUrl $ipnUrl = null, RedirectUrl $redirectUrl = null)
    {
        $this->ipnUrl = $ipnUrl;
        $this->redirectUrl = $redirectUrl;
    }

    public function setIpnUrl(IpnUrl $ipnUrl)
    {
        $this->ipnUrl = $ipnUrl;
        return $this;
    }

    public function setRedirectUrl(RedirectUrl $redirectUrl)
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
