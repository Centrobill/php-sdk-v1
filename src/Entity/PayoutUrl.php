<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\Url;

class PayoutUrl
{
    /**
     * @var ?Url $ipnUrl
     */
    private ?Url $ipnUrl;

    public function __construct(?Url $ipnUrl = null)
    {
        $this->ipnUrl = $ipnUrl;
    }

    public function setIpnUrl(Url $ipnUrl)
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
