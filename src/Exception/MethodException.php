<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class MethodException extends Exception
{
    public static function emptyValue()
    {
        return new self('Method should not be empty.');
    }
}
