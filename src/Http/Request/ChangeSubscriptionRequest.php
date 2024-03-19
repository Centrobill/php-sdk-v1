<?php

namespace Centrobill\Sdk\Http\Request;

class ChangeSubscriptionRequest implements RequestInterface
{
    /**
     * @var array $price
     */
    private $price;

    public function __construct($price = [])
    {
        $this->price = $price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getPayload()
    {
        $data = [];

        if ($this->price !== null) {
            $data['price'] = $this->price;
        }

        return $data;
    }

    public function getUri()
    {
        return '/subscription/{id}';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_PUT;
    }
}
