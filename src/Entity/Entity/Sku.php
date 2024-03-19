<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\DomainName;
use Centrobill\Sdk\ValueObject\Name;
use Centrobill\Sdk\ValueObject\SiteId;
use Centrobill\Sdk\ValueObject\Title;
use Centrobill\Sdk\ValueObject\Xsell;

class Sku
{
    /**
     * @var Title $title
     */
    private Title $title;

    /**
     * @var SiteId $siteId
     */
    private SiteId $siteId;

    /**
     * @var DomainName $domainName
     */
    private DomainName $domainName;

    /**
     * @var array<Price> $price
     */
    private $price;

    /**
     * @var Url $url
     */
    private Url $url;

    /**
     * @var Action $action
     */
    private Action $action;

    /**
     * @var Xsell $xsell
     */
    private Xsell $xsell;

    /**
     * @var Name $name
     */
    private Name $name;

    public function __construct(
        $price = [],
        SiteId $siteId,
        Url $url,
        Name $name,
        Title $title = null,
        DomainName $domainName = null,
        Action $action = null,
        Xsell $xsell = null,
    ) {
        $this->price = $price;
        $this->siteId = $siteId;
        $this->url = $url;
        $this->name = $name;
        $this->title = $title;
        $this->domainName = $domainName;
        $this->action = $action;
        $this->xsell = $xsell;
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
        $data = [
            'price' => array_map(function($item) {
                return $item->toArray();
            }, $this->price),
            'siteId' => (string)$this->siteId,
            'url' => $this->url->toArray(),
            'name' => (string)$this->name,
        ];

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
