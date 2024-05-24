<?php

namespace Centrobill\Sdk\Http\Response;

class GetSubscriptionResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
