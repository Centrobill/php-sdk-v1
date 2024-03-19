<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\PaymentConsumer;
use Centrobill\Sdk\Entity\PaymentUrl;
use Centrobill\Sdk\ValueObject\EmailOptions;
use Centrobill\Sdk\ValueObject\Metadata;
use Centrobill\Sdk\ValueObject\PaymentSource;
use Centrobill\Sdk\ValueObject\Sku;

class PayRequest implements RequestInterface
{
    /**
     * @var PaymentSource $paymentSource
     */
    private PaymentSource $paymentSource;

    /**
     * @var Sku $sku
     */
    private Sku $sku;

    /**
     * @var PaymentConsumer $consumer
     */
    private PaymentConsumer $consumer;

    /**
     * @var PaymentUrl $url
     */
    private PaymentUrl $url;

    /**
     * @var Metadata $metadata
     */
    private Metadata $metadata;

    /**
     * @var EmailOptions $emailOptions
     */
    private EmailOptions $emailOptions;

    public function __construct(
        PaymentSource $paymentSource,
        Sku $sku,
        PaymentConsumer $consumer,
        PaymentUrl $url,
        Metadata $metadata = null,
        EmailOptions $emailOptions = null,
    ) {
        $this->paymentSource = $paymentSource;
        $this->sku = $sku;
        $this->consumer = $consumer;
        $this->url = $url;
        $this->metadata = $metadata;
        $this->emailOptions = $emailOptions;
    }

    public function setMetadata(Metadata $metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function setEmailOptions(EmailOptions $emailOptions)
    {
        $this->emailOptions = $emailOptions;
        return $this;
    }

    public function getPayload()
    {
        $data = [
            'paymentSource' => (string)$this->paymentSource,
            'sku' => (string)$this->sku,
            'consumer' => $this->consumer->toArray(),
            'url' => $this->url->toArray(),
        ];

        if ($this->metadata !== null) {
            $data['metadata'] = (string)$this->metadata;
        }

        if ($this->emailOptions !== null) {
            $data['emailOptions'] = (string)$this->emailOptions;
        }

        return $data;
    }

    public function getUri()
    {
        return '/payment';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
