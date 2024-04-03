<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\PaymentAccountId;

class DisablePaymentAccountForQuickSaleRequest implements RequestInterface
{
    /**
     * @var ApiKey $apiKey
     */
    private ApiKey $apiKey;
    
    /**
     * @var PaymentAccountId $paymentAccountId
     */
    private PaymentAccountId $paymentAccountId;

    public function __construct(ApiKey $apiKey, PaymentAccountId $paymentAccountId)
    {
        $this->apiKey = $apiKey;
        $this->paymentAccountId = $paymentAccountId;
    }

    public function getUri(): string
    {
        return sprintf('paymentAccount/%s/disable', (string)$this->paymentAccountId);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
            'Authorization' => (string)$this->apiKey,
        ];
    }

    public function getPayload(): array
    {
        return [];
    }
}
