<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\Parameters;
use Centrobill\Sdk\Entity\PayoutUrl;
use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\ConsumerId;
use Centrobill\Sdk\ValueObject\Currency;
use Centrobill\Sdk\ValueObject\Field;
use Centrobill\Sdk\ValueObject\PaymentAccountId;
use Centrobill\Sdk\ValueObject\Sku\SiteId;

class PayoutRequest implements RequestInterface
{
    use HasRequestId;

    /**
     * @var ?ConsumerId $consumerId
     */
    private ?ConsumerId $consumerId;

    /**
     * @var ?PaymentAccountId $paymentAccountId
     */
    private ?PaymentAccountId $paymentAccountId;

    /**
     * @var ?SiteId $siteId
     */
    private ?SiteId $siteId;

    /**
     * @var ?Parameters $parameters
     */
    private ?Parameters $parameters;

    /**
     * @var Amount $amount
     */
    private Amount $amount;

    /**
     * @var Currency $currency
     */
    private Currency $currency;

    /**
     * @var ?PayoutUrl $url
     */
    private ?PayoutUrl $url;

    /**
     * @var Array<Field> $metadata
     */
    private $metadata;

    public function __construct(
        Amount $amount,
        Currency $currency,
        ?ConsumerId $consumerId = null,
        ?PaymentAccountId $paymentAccountId = null,
        ?SiteId $siteId = null,
        ?Parameters $parameters = null,
        ?PayoutUrl $url = null,
        $metadata = []
    ) {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->consumerId = $consumerId;
        $this->paymentAccountId = $paymentAccountId;
        $this->siteId = $siteId;
        $this->parameters = $parameters;
        $this->url = $url;
        $this->metadata = $metadata;
    }

    public function setConsumerId(ConsumerId $consumerId): PayoutRequest
    {
        $this->consumerId = $consumerId;
        return $this;
    }

    public function setPaymentAccountId(PaymentAccountId $paymentAccountId): PayoutRequest
    {
        $this->paymentAccountId = $paymentAccountId;
        return $this;
    }

    public function setSiteId(SiteId $siteId): PayoutRequest
    {
        $this->siteId = $siteId;
        return $this;
    }

    public function setParameters(Parameters $parameters): PayoutRequest
    {
        $this->parameters = $parameters;
        return $this;
    }

    public function setUrl(PayoutUrl $url): PayoutRequest
    {
        $this->url = $url;
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

    public function getPayload(): array
    {
        $data = [
            'amount' => $this->amount->getValue(),
            'currency' => (string)$this->currency,
        ];

        if ($this->consumerId !== null) {
            $data['consumerId'] = (string)$this->consumerId;
        }

        if ($this->paymentAccountId !== null) {
            $data['paymentAccountId'] = (string)$this->paymentAccountId;
        }

        if ($this->siteId !== null) {
            $data['siteId'] = (string)$this->siteId;
        }

        if ($this->parameters !== null) {
            $data['parameters'] = $this->parameters->toArray();
        }

        if ($this->url !== null) {
            $data['url'] = $this->url->toArray();
        }

        if (!empty($this->metadata)) {
            foreach ($this->metadata as $field) {
                $data['metadata'][$field->getKey()] = $field->getValue();
            }
        }

        return $data;
    }

    public function getUri(): string
    {
        return 'payout';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        if ($this->getRequestId() !== null) {
            return [
                'X-Request-ID' => $this->getRequestId(),
            ];
        }

        return [];
    }
}
