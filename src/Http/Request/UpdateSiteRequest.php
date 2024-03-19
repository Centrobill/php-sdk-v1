<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\IpnUrl;
use Centrobill\Sdk\ValueObject\Name;
use Centrobill\Sdk\ValueObject\RedirectUrl;

class UpdateSiteRequest implements RequestInterface
{
    /**
     * @var Name $name
     */
    private Name $name;

    /**
     * @var ExternalId $externalId
     */
    private ExternalId $externalId;

    /**
     * @var IpnUrl $ipnUrl
     */
    private IpnUrl $ipnUrl;

    /**
     * @var RedirectUrl $redirectUrl
     */
    private RedirectUrl $redirectUrl;

    public function __construct(
        Name $name = null,
        ExternalId $externalId = null,
        IpnUrl $ipnUrl = null,
        RedirectUrl $redirectUrl = null,
    ) {
        $this->name = $name;
        $this->externalId = $externalId;
        $this->ipnUrl = $ipnUrl;
        $this->redirectUrl = $redirectUrl;
    }

    public function setName(Name $name)
    {
        $this->name = $name;
        return $this;
    }

    public function setExternalId(ExternalId $externalId)
    {
        $this->externalId = $externalId;
        return $this;
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

    public function getPayload()
    {
        $data = [];

        if ($this->name !== null) {
            $data['name'] = (string)$this->name;
        }

        if ($this->externalId !== null) {
            $data['externalId'] = (string)$this->externalId;
        }

        if ($this->ipnUrl !== null) {
            $data['ipnUrl'] = (string)$this->ipnUrl;
        }

        if ($this->redirectUrl !== null) {
            $data['redirectUrl'] = (string)$this->redirectUrl;
        }

        return $data;
    }

    public function getUri()
    {
        return '/site/{id}';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_PUT;
    }
}
