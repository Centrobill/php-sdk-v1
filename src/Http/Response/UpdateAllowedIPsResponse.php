<?php

namespace Centrobill\Sdk\Http\Response;

class UpdateAllowedIPsResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
