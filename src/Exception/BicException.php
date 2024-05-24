<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class BicException extends Exception
{
    public static function emptyValue()
    {
        return new self('Bic should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Bic should be between 8 and 11 characters long.');
    }
}
