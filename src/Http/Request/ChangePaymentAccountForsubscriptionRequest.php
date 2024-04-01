<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\Consumer;
use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\PaymentSourceType;

class ChangePaymentAccountForsubscriptionRequest implements RequestInterface
{
    /**
     * @var Id $id
     */
    private Id $id;
    
    /**
     * @var PaymentSourceType $paymentSource
     */
    private PaymentSourceType $paymentSource;

    /**
     * @var Consumer $consumer
     */
    private Consumer $consumer;

    public function __construct(Id $id, PaymentSourceType $paymentSource, Consumer $consumer)
    {
        $this->id = $id;
        $this->paymentSource = $paymentSource;
        $this->consumer = $consumer;
    }

    public function getPayload(): array
    {
        $data = [
            'paymentSource' => (string)$this->paymentSource,
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
