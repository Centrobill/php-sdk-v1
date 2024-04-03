<?php

namespace Centrobill\Sdk\Http\Response;

class GetProductResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
