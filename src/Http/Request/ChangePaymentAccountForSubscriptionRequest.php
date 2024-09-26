<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\Consumer;
use Centrobill\Sdk\Entity\PaymentSource\AbstractPaymentSource;
use Centrobill\Sdk\ValueObject\Id;

class ChangePaymentAccountForSubscriptionRequest implements RequestInterface
{
    use HasRequestId;

    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var AbstractPaymentSource $paymentSource
     */
    private AbstractPaymentSource $paymentSource;

    /**
     * @var Consumer $consumer
     */
    private Consumer $consumer;

    public function __construct(Id $id, AbstractPaymentSource $paymentSource, Consumer $consumer)
    {
        $this->id = $id;
        $this->paymentSource = $paymentSource;
        $this->consumer = $consumer;
    }

    public function getPayload(): array
    {
        return [
            'paymentSource' => $this->paymentSource->toArray(),
            'consumer' => $this->consumer->toArray(),
        ];
    }

    public function getUri(): string
    {
        return sprintf('subscription/%s/paymentAccount', $this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PUT;
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
