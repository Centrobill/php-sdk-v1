<?php

namespace Centrobill\Sdk\Http\Response;

class GetListOfTestPaymentDataResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
