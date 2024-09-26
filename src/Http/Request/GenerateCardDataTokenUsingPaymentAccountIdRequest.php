<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ConsumerId;
use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\PaymentAccountId;

class GenerateCardDataTokenUsingPaymentAccountIdRequest implements RequestInterface
{
    use HasRequestId;

    /**
     * @var PaymentAccountId $paymentAccountId
     */
    private PaymentAccountId $paymentAccountId;

    /**
     * @var ConsumerId $consumerId
     */
    private ConsumerId $consumerId;

    /**
     * @var Cvv $cvv
     */
    private Cvv $cvv;

    public function __construct(PaymentAccountId $paymentAccountId, ConsumerId $consumerId, Cvv $cvv)
    {
        $this->paymentAccountId = $paymentAccountId;
        $this->consumerId = $consumerId;
        $this->cvv = $cvv;
    }

    public function getPayload(): array
    {
        return [
            'paymentAccountId' => (string)$this->paymentAccountId,
            'consumerId' => (string)$this->consumerId,
            'cvv' => (string)$this->cvv,
        ];
    }

    public function getUri(): string
    {
        return 'tokenizeWithPaymentAccountId';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        $headers = [
            'X-Requested-With' => 'XMLHttpRequest',
        ];

        if ($this->getRequestId() !== null) {
            $headers['X-Request-ID'] = $this->getRequestId();
        }

        return $headers;
    }
}
