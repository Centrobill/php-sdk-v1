<?php

namespace Centrobill\Sdk\Http\Response;

class GenerateCardDataTokenUsingPaymentAccountIdResponse extends AbstractResponse implements ResponseInterface
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
