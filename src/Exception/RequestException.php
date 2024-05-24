<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class RequestException extends Exception
{
    public static function emptyValue()
    {
        return new self('Request should not be empty.');
    }
}
