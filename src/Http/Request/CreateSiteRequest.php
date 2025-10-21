<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ClientId;
use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\SiteName;
use Centrobill\Sdk\ValueObject\Url;

class CreateSiteRequest implements RequestInterface
{
    use HasRequestId;

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
     * @var Url|null $redirectUrl
     */
    private ?Url $redirectUrl;

    /**
     * @var ClientId|null $clientId
     */
    private ?ClientId $clientId;

    public function __construct(
        SiteName $name,
        ExternalId $externalId,
        Url $ipnUrl,
        ?Url $redirectUrl = null,
        ?ClientId $clientId = null
    ) {
        $this->name = $name;
        $this->ipnUrl = $ipnUrl;
        $this->externalId = $externalId;
        $this->redirectUrl = $redirectUrl;
        $this->clientId = $clientId;
    }

    public function setExternalId(ExternalId $externalId): CreateSiteRequest
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function setRedirectUrl(Url $redirectUrl): CreateSiteRequest
    {
        $this->redirectUrl = $redirectUrl;
        return $this;
    }

    public function setClientId(ClientId $clientId): CreateSiteRequest
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getPayload(): array
    {
        $payload = [
            'name' => (string)$this->name,
            'ipnUrl' => (string)$this->ipnUrl,
            'externalId' => (string)$this->externalId,
        ];

        if ($this->redirectUrl !== null) {
            $payload['redirectUrl'] = (string)$this->redirectUrl;
        }

        if ($this->clientId !== null) {
            $payload['clientId'] = (string)$this->clientId;
        }

        return $payload;
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
        if ($this->getRequestId() !== null) {
            return [
                'X-Request-Id' => $this->getRequestId(),
            ];
        }

        return [];
    }
}
