<?php

namespace Centrobill\Sdk\Http\Response;

class GetTestPaymentDataByIdResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
