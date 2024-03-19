<?php

namespace Centrobill\Sdk\Http\Response;

use stdClass;

class BlockTestPaymentDataResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
