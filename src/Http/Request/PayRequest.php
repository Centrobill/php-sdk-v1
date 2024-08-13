<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\Consumer;
use Centrobill\Sdk\Entity\PaymentSource\AbstractPaymentSource;
use Centrobill\Sdk\Entity\PaymentUrl;
use Centrobill\Sdk\Entity\Sku;
use Centrobill\Sdk\ValueObject\Field;

class PayRequest implements RequestInterface
{
    /**
     * @var AbstractPaymentSource $paymentSource
     */
    private AbstractPaymentSource $paymentSource;

    /**
     * @var Sku $sku
     */
    private Sku $sku;

    /**
     * @var Consumer $consumer
     */
    private Consumer $consumer;

    /**
     * @var PaymentUrl $url
     */
    private PaymentUrl $url;

    /**
     * @var Array<Field> $metadata
     */
    private $metadata;

    /**
     * @var bool|null $emailOptions
     */
    private $emailOptions;

    public function __construct(
        AbstractPaymentSource $paymentSource,
        Sku $sku,
        Consumer $consumer,
        PaymentUrl $url,
        $metadata = [],
        $emailOptions = null
    ) {
        $this->paymentSource = $paymentSource;
        $this->sku = $sku;
        $this->consumer = $consumer;
        $this->url = $url;
        $this->metadata = $metadata;
        $this->emailOptions = $emailOptions;
    }

    public function addMetadataField(Field $field): self
    {
        $this->metadata[] = $field;
        return $this;
    }

    public function setMetadata($metadata): self
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function setEmailOptions($emailOptions): self
    {
        $this->emailOptions = $emailOptions;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [
            'paymentSource' => $this->paymentSource->toArray(),
            'sku' => $this->sku->toArray(),
            'consumer' => $this->consumer->toArray(),
            'url' => $this->url->toArray()
        ];

        if ($this->emailOptions !== null) {
            $data['emailOptions'] = $this->emailOptions;
        }

        if (!empty($this->metadata)) {
            foreach($this->metadata as $field) {
                $data['metadata'][$field->getKey()] = $field->getValue();
                
            }
        }

        return $data;
    }

    public function getUri(): string 
    {
        return 'payment';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }
}
