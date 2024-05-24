<?php

namespace Centrobill\Sdk\Http\Response;

class GenerateCardDataTokenResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }

    public function getToken()
    {
        return $this->data->token;
    }

    public function getExpiredAt()
    {
        return $this->data->expiredAt;
    }
}
