<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Site;

class UpdateSiteResponse extends AbstractResponse implements ResponseInterface
{
    public function getSite(): Site
    {
        return new Site($this->data);
    }
}
