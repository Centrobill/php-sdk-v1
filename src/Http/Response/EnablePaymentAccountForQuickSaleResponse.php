<?php

namespace Centrobill\Sdk\Http\Response;

class EnablePaymentAccountForQuickSaleResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
