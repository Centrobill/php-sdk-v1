<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Name;
use Centrobill\Sdk\ValueObject\Url;

class UpdateSiteRequest implements RequestInterface
{
    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var Name $name
     */
    private Name $name;

    /**
     * @var ExternalId $externalId
     */
    private ExternalId $externalId;

    /**
     * @var Url $ipnUrl
     */
    private Url $ipnUrl;

    /**
     * @var Url $redirectUrl
     */
    private Url $redirectUrl;

    public function __construct(
        Id $id,
        Name $name = null,
        ExternalId $externalId = null,
        Url $ipnUrl = null,
        Url $redirectUrl = null,
    ) {
        $this->id = $id;
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

    public function getPayload(): array
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

    public function getUri(): string
    {
        return sprintf('site/%s', (string)$this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PUT;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }
}
