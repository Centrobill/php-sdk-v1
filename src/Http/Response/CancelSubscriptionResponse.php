<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Utils\Utils;
use stdClass;

class CancelSubscriptionResponse extends AbstractResponse
{
    public function isSuccessful()
    {
        return true;
    }
}
