<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Ip;
use Exception;

class UpdateAllowedIPsRequest implements RequestInterface
{
    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var Array<Ip> $items
     */
    private $items;

    public function __construct(Id $id, $items = [])
    {
        $this->id = $id;
        $this->items = $items;
    }

    public function addItem(Ip $item)
    {
        $this->items[] = $item;
        return $this;
    }

    public function setItems($items): self
    {
        $this->items = $items;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [];

        if (!empty($this->items)) {
            $data['ips'] = array_map(function (Ip $item) {
                return (string)$item;
            }, $this->items);
        } else {
            throw new Exception('Items are empty');
        }

        return $data;
    }

    public function getUri(): string
    {
        return sprintf('testPaymentData/%s/allowedIps', (string)$this->id);
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
