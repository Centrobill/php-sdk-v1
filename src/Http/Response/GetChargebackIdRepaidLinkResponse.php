<?php

namespace Centrobill\Sdk\Http\Response;

class GetChargebackIdRepaidLinkResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
