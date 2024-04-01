<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\IpnUrl;
use Centrobill\Sdk\ValueObject\Name;
use Centrobill\Sdk\ValueObject\RedirectUrl;

class CreateSiteRequest implements RequestInterface
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
        Name $name,
        IpnUrl $ipnUrl,
        ExternalId $externalId = null,
        RedirectUrl $redirectUrl = null,
    ) {
        $this->name = $name;
        $this->ipnUrl = $ipnUrl;
        $this->externalId = $externalId;
        $this->redirectUrl = $redirectUrl;
    }

    public function setExternalId(ExternalId $externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function setRedirectUrl(RedirectUrl $redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    public function getPayload()
    {
        $data = [
            'name' => (string)$this->name,
            'ipnUrl' => (string)$this->ipnUrl,
        ];

        if ($this->externalId !== null) {
            $data['externalId'] = (string)$this->externalId;
        }

        if ($this->redirectUrl !== null) {
            $data['redirectUrl'] = (string)$this->redirectUrl;
        }

        return $data;
    }

    public function getUri()
    {
        return 'site';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
