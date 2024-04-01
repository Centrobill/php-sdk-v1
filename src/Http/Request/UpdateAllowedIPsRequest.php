<?php

namespace Centrobill\Sdk\Http\Request;

class UpdateAllowedIPsRequest implements RequestInterface
{
    /**
     * @var array $items
     */
    private $items;

    public function __construct($items = [])
    {
        $this->items = $items;
    }

    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    public function getPayload()
    {
        $data = [];

        if ($this->items !== null) {
            $data['items'] = $this->items;
        }

        return $data;
    }

    public function getUri()
    {
        return 'testPaymentData/{id}/allowedIps';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
