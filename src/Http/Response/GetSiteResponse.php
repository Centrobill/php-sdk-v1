<?php

namespace Centrobill\Sdk\Http\Response;

class GetSiteResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
