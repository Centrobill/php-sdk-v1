<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;

class RecoverSubscriptionRequest implements RequestInterface
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

    public function getUri(): string
    {
        return sprintf('subscription/%s/recover', $this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PUT;
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

    public function getPayload(): array
    {
        return [];
    }
}
