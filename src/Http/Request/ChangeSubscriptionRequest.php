<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\Price;
use Centrobill\Sdk\ValueObject\Id;

class ChangeSubscriptionRequest implements RequestInterface
{
    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var Array<Price> $price
     */
    private $price;

    public function __construct(Id $id, $price = [])
    {
        $this->id = $id;
        $this->price = $price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [];

        if (!empty($this->price)) {
            $data['price'] = array_map(function(Price $price) {
                return $price->toArray();
            }, $this->price);
        }

        return $data;
    }

    public function getUri(): string 
    {
        return sprintf('subscription/%s', (string)$this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PUT;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }
}
