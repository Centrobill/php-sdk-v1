<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Entity\PayoutUrl;
use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\ConsumerId;
use Centrobill\Sdk\ValueObject\Currency;
use Centrobill\Sdk\ValueObject\Metadata;
use Centrobill\Sdk\ValueObject\Parameters;
use Centrobill\Sdk\ValueObject\PaymentAccountId;
use Centrobill\Sdk\ValueObject\SiteId;

class PayoutRequest implements RequestInterface
{
    /**
     * @var ConsumerId $consumerId
     */
    private ConsumerId $consumerId;

    /**
     * @var PaymentAccountId $paymentAccountId
     */
    private PaymentAccountId $paymentAccountId;

    /**
     * @var SiteId $siteId
     */
    private SiteId $siteId;

    /**
     * @var Parameters $parameters
     */
    private Parameters $parameters;

    /**
     * @var Amount $amount
     */
    private Amount $amount;

    /**
     * @var Currency $currency
     */
    private Currency $currency;

    /**
     * @var PayoutUrl $url
     */
    private PayoutUrl $url;

    /**
     * @var Metadata $metadata
     */
    private Metadata $metadata;

    public function __construct(
        Amount $amount,
        Currency $currency,
        ConsumerId $consumerId = null,
        PaymentAccountId $paymentAccountId = null,
        SiteId $siteId = null,
        Parameters $parameters = null,
        PayoutUrl $url = null,
        Metadata $metadata = null,
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

    public function setConsumerId(ConsumerId $consumerId)
    {
        $this->consumerId = $consumerId;
        return $this;
    }

    public function setPaymentAccountId(PaymentAccountId $paymentAccountId)
    {
        $this->paymentAccountId = $paymentAccountId;
        return $this;
    }

    public function setSiteId(SiteId $siteId)
    {
        $this->siteId = $siteId;
        return $this;
    }

    public function setParameters(Parameters $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    public function setUrl(PayoutUrl $url)
    {
        $this->url = $url;
        return $this;
    }

    public function setMetadata(Metadata $metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function getPayload()
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
            $data['parameters'] = (string)$this->parameters;
        }

        if ($this->url !== null) {
            $data['url'] = $this->url->toArray();
        }

        if ($this->metadata !== null) {
            $data['metadata'] = (string)$this->metadata;
        }

        return $data;
    }

    public function getUri()
    {
        return 'payout';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
