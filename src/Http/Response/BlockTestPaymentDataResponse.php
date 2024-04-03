<?php

namespace Centrobill\Sdk\Http\Response;

class BlockTestPaymentDataResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
