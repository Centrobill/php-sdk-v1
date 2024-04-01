<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\Reason;

class CreditRequest implements RequestInterface
{
    /**
     * @var Amount $amount
     */
    private Amount $amount;

    /**
     * @var Reason $reason
     */
    private Reason $reason;

    public function __construct(Reason $reason, Amount $amount = null)
    {
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
        return 'payment/{id}/credit';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }
}
