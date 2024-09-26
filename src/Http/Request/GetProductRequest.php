<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Sku\Name;

class GetProductRequest implements RequestInterface
{
    use HasRequestId;

    /**
     * @var Name $name
     */
    private Name $name;

    public function __construct(Name $name)
    {
        $this->name = $name;
    }

    public function getPayload(): array
    {
        return [];
    }

    public function getUri(): string
    {
        return sprintf('sku/%s', $this->name);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }

    public function getHeaders(): array
    {
        if ($this->getRequestId() !== null) {
            return [
                'X-Request-ID' => $this->getRequestId(),
            ];
        }

        return [];
    }
}
