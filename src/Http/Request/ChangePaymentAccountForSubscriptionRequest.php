<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\Consumer;
use Centrobill\Sdk\Entity\PaymentSource\AbstractPaymentSource;
use Centrobill\Sdk\ValueObject\Id;

class ChangePaymentAccountForSubscriptionRequest implements RequestInterface
{
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
        $data = [
            'paymentSource' => $this->paymentSource->toArray(),
            'consumer' => $this->consumer->toArray(),
        ];

        return $data;
    }

    public function getUri(): string
    {
        return sprintf('subscription/%s/paymentAccount', (string)$this->id);
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
