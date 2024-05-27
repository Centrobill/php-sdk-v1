<?php

namespace Centrobill\Sdk\Http\Response;

class GenerateCardDataTokenUsingPaymentAccountIdResponse extends AbstractResponse implements ResponseInterface
{
    public function getToken()
    {
        return $this->data->token;
    }

    public function getExpiredAt()
    {
        return $this->data->expiredAt;
    }
}
