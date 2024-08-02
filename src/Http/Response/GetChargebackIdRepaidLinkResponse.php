<?php

namespace Centrobill\Sdk\Http\Response;

class GetChargebackIdRepaidLinkResponse extends AbstractResponse implements ResponseInterface
{
    public function getCode()
    {
        return $this->data->code;
    }

    public function getUrl()
    {
        return $this->data->url;
    }
}
