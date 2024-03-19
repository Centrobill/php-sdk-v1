<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class PayidException extends Exception
{
    public static function emptyValue()
    {
        return new self('Payid should not be empty.');
    }
}
