<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class IbanException extends Exception
{
    public static function emptyValue()
    {
        return new self('Iban should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Iban should be between 5 and 34 characters long.');
    }
}
