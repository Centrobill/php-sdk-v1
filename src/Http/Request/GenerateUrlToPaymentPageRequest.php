<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\Consumer;
use Centrobill\Sdk\Entity\Payment;
use Centrobill\Sdk\Entity\Template;
use Centrobill\Sdk\ValueObject\EmailOptions;
use Centrobill\Sdk\ValueObject\Metadata;
use Centrobill\Sdk\ValueObject\Sku;
use Centrobill\Sdk\ValueObject\Ttl;

/**
 * @property Array<Sku>
 */
class GenerateUrlToPaymentPageRequest implements RequestInterface
{
    public function __construct(
        private $sku = [],
        private ?Consumer $consumer = null,
        private ?Template $template = null,
        private ?Payment $payment = null,
        private ?Metadata $metadata = null,
        private ?Ttl $ttl = null,
        private ?EmailOptions $emailOptions = null,
    ) {
        $this->sku = $sku;
        $this->consumer = $consumer;
        $this->template = $template;
        $this->payment = $payment;
        $this->metadata = $metadata;
        $this->ttl = $ttl;
        $this->emailOptions = $emailOptions;
    }

    public function setConsumer(Consumer $consumer): static
    {
        $this->consumer = $consumer;
        return $this;
    }

    public function setTemplate(Template $template): static
    {
        $this->template = $template;
        return $this;
    }

    public function setPayment(Payment $payment): static
    {
        $this->payment = $payment;
        return $this;
    }

    public function setMetadata(Metadata $metadata): static
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function setTtl(Ttl $ttl): static
    {
        $this->ttl = $ttl;
        return $this;
    }

    public function setEmailOptions(EmailOptions $emailOptions): static
    {
        $this->emailOptions = $emailOptions;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [
            'sku' => $this->sku,
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

        if ($this->metadata !== null) {
            $data['metadata'] = (string)$this->metadata;
        }

        if ($this->ttl !== null) {
            $data['ttl'] = (string)$this->ttl;
        }

        if ($this->emailOptions !== null) {
            $data['emailOptions'] = (string)$this->emailOptions;
        }

        return $data;
    }

    public function getUri(): string
    {
        return '/paymentPage';
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
