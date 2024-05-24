<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\PaymentAccountId;

class EnablePaymentAccountForQuickSaleRequest implements RequestInterface
{
    /**
     * @var PaymentAccountId $paymentAccountId
     */
    private PaymentAccountId $paymentAccountId;

    public function __construct(PaymentAccountId $paymentAccountId)
    {
        $this->paymentAccountId = $paymentAccountId;
    }

    public function getUri(): string
    {
        return sprintf('paymentAccount/%s/enable', (string)$this->paymentAccountId);
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

    public function getPayload(): array
    {
        return [];
    }
}
