<?php

namespace Centrobill\Sdk\Http\Response;

class UpdateSiteResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
