<?php

namespace Centrobill\Sdk\Http\Response;

class DisablePaymentAccountForQuickSaleResponse extends AbstractResponse implements ResponseInterface
{
    public function getPaymentAccountId(): string
    {
        return $this->data->paymentAccountId;
    }
}
