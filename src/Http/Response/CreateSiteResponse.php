<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Site;

class CreateSiteResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }

    public function getSite(): Site
    {
        return new Site($this->data);
    }
}
