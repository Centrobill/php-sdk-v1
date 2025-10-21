<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Reason;

class RecoverSubscriptionRequest implements RequestInterface
{
    use HasRequestId;

    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var Reason|null $reason
     */
    private ?Reason $reason;

    public function __construct(Id $id, ?Reason $reason = null)
    {
        $this->id = $id;
        $this->reason = $reason;
    }

    public function setReason(Reason $reason): self
    {
        $this->reason = $reason;
        return $this;
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
        $payload = [];

        if ($this->reason !== null) {
            $payload['reason'] = (string)$this->reason;
        }

        return $payload;
    }
}
