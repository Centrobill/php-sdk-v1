<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\IpnUrl;

class PayoutUrl
{
    /**
     * @var IpnUrl $ipnUrl
     */
    private IpnUrl $ipnUrl;

    public function __construct(IpnUrl $ipnUrl = null)
    {
        $this->ipnUrl = $ipnUrl;
    }

    public function setIpnUrl(IpnUrl $ipnUrl)
    {
        $this->ipnUrl = $ipnUrl;
        return $this;
    }

    public function toArray()
    {
        $data = [];

        if ($this->ipnUrl !== null) {
            $data['ipnUrl'] = (string)$this->ipnUrl;
        }

        return $data;
    }
}
