<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\Consumer2;
use Centrobill\Sdk\ValueObject\PaymentSource;

class ChangePaymentAccountForsubscriptionRequest implements RequestInterface
{
    /**
     * @var PaymentSource $paymentSource
     */
    private PaymentSource $paymentSource;

    /**
     * @var Consumer2 $consumer
     */
    private Consumer2 $consumer;

    public function __construct(PaymentSource $paymentSource, Consumer2 $consumer)
    {
        $this->paymentSource = $paymentSource;
        $this->consumer = $consumer;
    }

    public function getPayload()
    {
        $data = [
            'paymentSource' => (string)$this->paymentSource,
            'consumer' => $this->consumer->toArray(),
        ];

        return $data;
    }

    public function getUri()
    {
        return 'subscription/{id}/paymentAccount';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_PUT;
    }
}
