<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\Currency;
use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\SiteId;
use Centrobill\Sdk\ValueObject\Title;
use Centrobill\Sdk\ValueObject\Type;

class CreateProductRequest implements RequestInterface
{
    /**
     * @var SiteId $siteId
     */
    private SiteId $siteId;

    /**
     * @var Title $title
     */
    private Title $title;

    /**
     * @var ExternalId $externalId
     */
    private ExternalId $externalId;

    /**
     * @var Type $type
     */
    private Type $type;

    /**
     * @var Amount $amount
     */
    private Amount $amount;

    /**
     * @var array $price
     */
    private $price;

    /**
     * @var Currency $currency
     */
    private Currency $currency;

    public function __construct(
        $price = [],
        SiteId $siteId,
        Title $title,
        Type $type,
        ExternalId $externalId = null,
        Amount $amount = null,
        Currency $currency = null,
    ) {
        $this->price = $price;
        $this->siteId = $siteId;
        $this->title = $title;
        $this->type = $type;
        $this->externalId = $externalId;
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function setExternalId(ExternalId $externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function setAmount(Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
        return $this;
    }

    public function getPayload()
    {
        $data = [
            'price' => $this->price,
            'siteId' => (string)$this->siteId,
            'title' => (string)$this->title,
            'type' => (string)$this->type,
        ];

        if ($this->externalId !== null) {
            $data['externalId'] = (string)$this->externalId;
        }

        if ($this->amount !== null) {
            $data['amount'] = (string)$this->amount;
        }

        if ($this->currency !== null) {
            $data['currency'] = (string)$this->currency;
        }

        return $data;
    }

    public function getUri()
    {
        return '/sku';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
