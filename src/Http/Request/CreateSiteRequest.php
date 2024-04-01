<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\Name;
use Centrobill\Sdk\ValueObject\Url;

class CreateSiteRequest implements RequestInterface
{
    /**
     * @var Name $name
     */
    private Name $name;

    /**
     * @var ?ExternalId $externalId
     */
    private ?ExternalId $externalId;

    /**
     * @var Url $ipnUrl
     */
    private Url $ipnUrl;

    /**
     * @var ?Url $redirectUrl
     */
    private ?Url $redirectUrl;

    public function __construct(
        Name $name,
        Url $ipnUrl,
        ?ExternalId $externalId = null,
        ?Url $redirectUrl = null,
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

    public function setRedirectUrl(Url $redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    public function getPayload(): array
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

    public function getUri(): string
    {
        return 'site';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }
}
