<?php

namespace Centrobill\Sdk\Http\Response;

class GetApplePaySessionResponse extends AbstractResponse implements ResponseInterface
{
    public function getSession()
    {
        return $this->data->session;
    }
}
