<?php

namespace Centrobill\Sdk\Entity\Sku;

use Centrobill\Sdk\ValueObject\Url as UrlValue;

class Url
{
    /**
     * @var UrlValue $ipnUrl
     */
    private UrlValue $ipnUrl;

    /**
     * @var UrlValue $redirectUrl
     */
    private UrlValue $redirectUrl;

    public function __construct(UrlValue $ipnUrl = null, UrlValue $redirectUrl = null)
    {
        $this->ipnUrl = $ipnUrl;
        $this->redirectUrl = $redirectUrl;
    }

    public function setIpnUrl(UrlValue $ipnUrl)
    {
        $this->ipnUrl = $ipnUrl;
        return $this;
    }

    public function setRedirectUrl(UrlValue $redirectUrl)
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
