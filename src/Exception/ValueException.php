<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class ValueException extends Exception
{
    public static function emptyValue()
    {
        return new self('Value should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Value should be between 5 and 36 characters long.');
    }
}
