<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;

class GetConsumerRequest implements RequestInterface
{
    use HasRequestId;

    /**
     * @var Id $id
     */
    private Id $id;

    public function __construct(Id $id)
    {
        $this->id = $id;
    }

    public function getPayload(): array
    {
        return [];
    }

    public function getUri(): string
    {
        return sprintf('consumer/%s', $this->id);
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
