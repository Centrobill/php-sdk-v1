<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\Consumer;
use Centrobill\Sdk\Entity\Payment;
use Centrobill\Sdk\Entity\Sku;
use Centrobill\Sdk\Entity\Template;
use Centrobill\Sdk\ValueObject\Field;
use Centrobill\Sdk\ValueObject\Ttl;

/**
 * @property Array<Sku>
 */
class GenerateUrlToPaymentPageRequest implements RequestInterface
{
    /** @var Array<Sku> $sku */
    private $sku;

    /** @var ?Consumer $consumer */
    private ?Consumer $consumer;

    /** @var ?Template $template */
    private ?Template $template;

    /** @var ?Payment $payment */
    private ?Payment $payment;

    /** @var Array<Field> $metadata */
    private $metadata;

    /** @var ?Ttl $ttl */
    private ?Ttl $ttl;

    /** @var bool $emailOptions */
    private $emailOptions;

    public function __construct(
        $sku = [],
        ?Consumer $consumer = null,
        ?Template $template = null,
        ?Payment $payment = null,
        $metadata = [],
        ?Ttl $ttl = null,
        $emailOptions = false
    ) {
        $this->sku = $sku;
        $this->consumer = $consumer;
        $this->template = $template;
        $this->payment = $payment;
        $this->metadata = $metadata;
        $this->ttl = $ttl;
        $this->emailOptions = $emailOptions;
    }

    public function addSku(Sku $sku): self
    {
        $this->sku[] = $sku;
        return $this;
    }

    public function setConsumer(Consumer $consumer): self
    {
        $this->consumer = $consumer;
        return $this;
    }

    public function setTemplate(Template $template): self
    {
        $this->template = $template;
        return $this;
    }

    public function setPayment(Payment $payment): self
    {
        $this->payment = $payment;
        return $this;
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

    public function setTtl(Ttl $ttl): self
    {
        $this->ttl = $ttl;
        return $this;
    }

    public function setEmailOptions($emailOptions): self
    {
        $this->emailOptions = $emailOptions;
        return $this;
    }

    public function getPayload(): array
    {
        if (empty($this->sku)) {
            throw new \InvalidArgumentException('Sku cannot be empty');
        }

        $data = [
            'sku' => array_map(function($item) {
                return $item->toArray();
            }, $this->sku),
            'emailOptions' => $this->emailOptions
        ];

        if ($this->consumer !== null) {
            $data['consumer'] = $this->consumer->toArray();
        }

        if ($this->template !== null) {
            $data['template'] = $this->template->toArray();
        }

        if ($this->payment !== null) {
            $data['payment'] = $this->payment->toArray();
        }

        if (!empty($this->metadata)) {
            foreach($this->metadata as $field) {
                $data['metadata'][$field->getKey()] = $field->getValue();
            }
        }

        if ($this->ttl !== null) {
            $data['ttl'] = (string)$this->ttl;
        }

        return $data;
    }

    public function getUri(): string
    {
        return 'paymentPage';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        return [];
    }
}
