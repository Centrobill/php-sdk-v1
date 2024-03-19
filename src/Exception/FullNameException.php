<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class FullNameException extends Exception
{
    public static function emptyValue()
    {
        return new self('Full name should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Full name should be between 1 and 64 characters long.');
    }
}
