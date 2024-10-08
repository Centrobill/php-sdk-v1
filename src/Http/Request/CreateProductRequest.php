<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\Price;
use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\Currency;
use Centrobill\Sdk\ValueObject\ExternalId;
use Centrobill\Sdk\ValueObject\Sku\SiteId;
use Centrobill\Sdk\ValueObject\Sku\SkuType;
use Centrobill\Sdk\ValueObject\Sku\Title;

class CreateProductRequest implements RequestInterface
{
    use HasRequestId;

    /**
     * @var SiteId $siteId
     */
    private SiteId $siteId;

    /**
     * @var Title $title
     */
    private Title $title;

    /**
     * @var ?ExternalId $externalId
     */
    private ?ExternalId $externalId;

    /**
     * @var SkuType $type
     */
    private SkuType $type;

    /**
     * @var ?Amount $amount
     */
    private ?Amount $amount;

    /**
     * @var Array<Price> $price
     */
    private $price;

    /**
     * @var ?Currency $currency
     */
    private ?Currency $currency;

    public function __construct(
        SiteId $siteId,
        Title $title,
        SkuType $type,
        $price = [],
        ?ExternalId $externalId = null,
        ?Amount $amount = null,
        ?Currency $currency = null
    ) {
        $this->siteId = $siteId;
        $this->title = $title;
        $this->type = $type;
        $this->price = $price;
        $this->externalId = $externalId;
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function addPrice(Price $price): CreateProductRequest
    {
        $this->price[] = $price;
        return $this;
    }

    public function setExternalId(ExternalId $externalId): CreateProductRequest
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function setAmount(Amount $amount): CreateProductRequest
    {
        $this->amount = $amount;
        return $this;
    }

    public function setCurrency(Currency $currency): CreateProductRequest
    {
        $this->currency = $currency;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [
            'siteId' => (string)$this->siteId,
            'title' => (string)$this->title,
            'type' => (string)$this->type,
        ];

        if (!empty($this->price)) {
            $data['price'] = array_map(function (Price $price) {
                return (object)$price->toArray();
            }, $this->price);
        }

        if ($this->externalId !== null) {
            $data['externalId'] = (string)$this->externalId;
        }

        if ($this->amount !== null) {
            $data['amount'] = $this->amount->getValue();
        }

        if ($this->currency !== null) {
            $data['currency'] = (string)$this->currency;
        }

        return $data;
    }

    public function getUri(): string
    {
        return 'sku';
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
