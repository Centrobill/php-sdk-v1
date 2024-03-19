<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ConsumerId;
use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\PaymentAccountId;

class GenerateCardDataTokenUsingPaymentAccountIdRequest implements RequestInterface
{
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

    public function getPayload()
    {
        $data = [
            'paymentAccountId' => (string)$this->paymentAccountId,
            'consumerId' => (string)$this->consumerId,
            'cvv' => (string)$this->cvv,
        ];

        return $data;
    }

    public function getUri()
    {
        return '/tokenizeWithPaymentAccountId';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
