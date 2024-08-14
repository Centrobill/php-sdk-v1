<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\Sku\Action;
use Centrobill\Sdk\Entity\Sku\Url;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Sku\DomainName;
use Centrobill\Sdk\ValueObject\Sku\Name;
use Centrobill\Sdk\ValueObject\Sku\SiteId;
use Centrobill\Sdk\ValueObject\Sku\Title;
use Centrobill\Sdk\ValueObject\Sku\Xsell;

class Sku
{
    /**
     * @var ?Title $title
     */
    private ?Title $title;

    /**
     * @var ?SiteId $siteId
     */
    private ?SiteId $siteId;

    /**
     * @var ?DomainName $domainName
     */
    private ?DomainName $domainName;

    /**
     * @var array<Price> $price
     */
    private $price;

    /**
     * @var ?Url $url
     */
    private ?Url $url;

    /**
     * @var ?Action $action
     */
    private ?Action $action;

    /**
     * @var ?Xsell $xsell
     */
    private ?Xsell $xsell;

    /**
     * @var ?Name $name
     */
    private ?Name $name;

    public function __construct(
        $price = [],
        ?Url $url = null,
        ?SiteId $siteId = null,
        ?Name $name = null,
        ?Title $title = null,
        ?DomainName $domainName = null,
        ?Action $action = null,
        ?Xsell $xsell = null
    ) {
        $this->siteId = $siteId;


        $this->name = $name;
        $this->price = $price;
        $this->url = $url;
        $this->title = $title;
        $this->domainName = $domainName;
        $this->action = $action;
        $this->xsell = $xsell;
    }

    public function addPrice(Price $price): self
    {
        $this->price[] = $price;
        return $this;
    }

    public function setUrl(Url $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function setSiteId(SiteId $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    public function setName(Name $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setTitle(Title $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setDomainName(DomainName $domainName): self
    {
        $this->domainName = $domainName;
        return $this;
    }

    public function setAction(Action $action): self
    {
        $this->action = $action;
        return $this;
    }

    public function setXsell(Xsell $xsell): self
    {
        $this->xsell = $xsell;
        return $this;
    }

    /**
     * @throws SDKExceptionInterface
     */
    public function toArray(): array
    {
        if ($this->siteId === null && $this->name === null) {
            throw SkuEntityException::siteIdNameEmpty();
        }

        $data = [
            'price' => array_map(function ($item) {
                return $item->toArray();
            }, $this->price),
        ];

        if ($this->url !== null) {
            $data['url'] = $this->url->toArray();
        }

        if ($this->siteId !== null) {
            $data['siteId'] = (string)$this->siteId;
        }

        if ($this->name !== null) {
            $data['name'] = (string)$this->name;
        }

        if ($this->title !== null) {
            $data['title'] = (string)$this->title;
        }

        if ($this->domainName !== null) {
            $data['domainName'] = (string)$this->domainName;
        }

        if ($this->action !== null) {
            $data['action'] = $this->action->toArray();
        }

        if ($this->xsell !== null) {
            $data['xsell'] = (string)$this->xsell;
        }

        return $data;
    }
}
