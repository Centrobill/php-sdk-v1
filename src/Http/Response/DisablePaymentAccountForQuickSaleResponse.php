<?php

namespace Centrobill\Sdk\Http\Response;

class DisablePaymentAccountForQuickSaleResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }

    public function getPaymentAccountId(): string
    {
        return $this->data->paymentAccountId;
    }
}
