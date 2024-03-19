<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class OffsetException extends Exception
{
    public static function emptyValue()
    {
        return new self('Offset should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Offset should be at most 5 characters long.');
    }
}
