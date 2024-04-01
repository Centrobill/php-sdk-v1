<?php

namespace Centrobill\Sdk\Http\Response;

class GenerateUrlToPaymentPageResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }

    public function getCode()
    {
        return $this->data->code;
    }

    public function getUrl()
    {
        return $this->data->url;
    }
}
