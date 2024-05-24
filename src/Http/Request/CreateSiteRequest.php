<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\SiteName;
use Centrobill\Sdk\ValueObject\Url;

class CreateSiteRequest implements RequestInterface
{
    /**
     * @var ApiKey $apiKey
     */
    private ApiKey $apiKey;

    /**
     * @var SiteName $name
     */
    private SiteName $name;

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
        ApiKey $apiKey,
        SiteName $name,
        ExternalId $externalId,
        Url $ipnUrl,
        Url $redirectUrl
    ) {
        $this->apiKey = $apiKey;
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
            'externalId' => (string)$this->externalId,
            'redirectUrl' => (string)$this->redirectUrl,
        ];

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
            'Authorization' => (string)$this->apiKey,
        ];
    }
}
