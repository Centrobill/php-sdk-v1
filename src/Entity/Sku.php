<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\Price;
use Centrobill\Sdk\Entity\Sku\Action;
use Centrobill\Sdk\Entity\Sku\Url;
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
     * @var Url $url
     */
    private Url $url;

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
        Url $url,
        $price = [],
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

    public function setSiteId(SiteId $siteId)
    {
        $this->siteId = $siteId;
        return $this;
    }

    public function setName(Name $name)
    {
        $this->name = $name;
        return $this;
    }

    public function setTitle(Title $title)
    {
        $this->title = $title;
        return $this;
    }

    public function setDomainName(DomainName $domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }

    public function setAction(Action $action)
    {
        $this->action = $action;
        return $this;
    }

    public function setXsell(Xsell $xsell)
    {
        $this->xsell = $xsell;
        return $this;
    }

    public function toArray()
    {
        if ($this->siteId === null && $this->name === null) {
            throw new \InvalidArgumentException('SiteId or Name are required');
        }

        $data = [
            'price' => array_map(function($item) {
                return $item->toArray();
            }, $this->price),
            'url' => $this->url->toArray(),
        ];

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
