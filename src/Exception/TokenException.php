<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class TokenException extends Exception
{
    public static function emptyValue()
    {
        return new self('Token should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Token should be at most 512 characters long.');
    }
}
