<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class AccountNumberException extends Exception
{
    public static function emptyValue()
    {
        return new self('Account number should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Account number should be at most 32 characters long.');
    }
}
