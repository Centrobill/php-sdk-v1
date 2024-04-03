<?php

namespace Centrobill\Sdk\Http\Response;

class GetConsumerResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
