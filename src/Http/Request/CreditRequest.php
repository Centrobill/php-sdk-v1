<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Reason;

class CreditRequest implements RequestInterface
{
    use HasRequestId;

    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var ?Amount $amount
     */
    private ?Amount $amount;

    /**
     * @var Reason $reason
     */
    private Reason $reason;

    public function __construct(Id $id, Reason $reason, ?Amount $amount = null)
    {
        $this->id = $id;
        $this->reason = $reason;
        $this->amount = $amount;
    }

    public function setAmount(Amount $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [
            'reason' => (string)$this->reason,
        ];

        if ($this->amount !== null) {
            $data['amount'] = $this->amount->getValue();
        }

        return $data;
    }

    public function getUri(): string
    {
        return sprintf('payment/%s/credit', $this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        if ($this->getRequestId() !== null) {
            return [
                'X-Request-Id' => $this->getRequestId(),
            ];
        }

        return [];
    }
}
