<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Utils\Utils;
use stdClass;

class EnablePaymentAccountForQuickSaleResponse extends AbstractResponse implements ResponseInterface
{
    

    public function isSuccessful()
    {
        return true;
    }

    
}
