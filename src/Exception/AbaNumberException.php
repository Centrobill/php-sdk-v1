<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class AbaNumberException extends Exception
{
    public static function emptyValue()
    {
        return new self('Aba number should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Aba number should be at most 32 characters long.');
    }
}
