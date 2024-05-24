<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\Consumer;
use Centrobill\Sdk\Entity\PaymentSource\AbstractPaymentSource;
use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Id;

class ChangePaymentAccountForsubscriptionRequest implements RequestInterface
{
    /**
     * @var ApiKey $apiKey
     */
    private ApiKey $apiKey;
    
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

    public function __construct(ApiKey $apiKey, Id $id, AbstractPaymentSource $paymentSource, Consumer $consumer)
    {
        $this->apiKey = $apiKey;
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
            'Authorization' => (string)$this->apiKey,
        ];
    }
}
