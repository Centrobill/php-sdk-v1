<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\SDK\Http\Response\ResponseInterface;

class BlockTestPaymentDataResponse extends AbstractResponse implements ResponseInterface
{

    public function isSuccessful()
    {
        return true;
    }

    public function getData()
    {
        return [];
    }
}
