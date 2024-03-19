<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class DomainNameException extends Exception
{
    public static function emptyValue()
    {
        return new self('Domain name should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Domain name should be between 5 and 36 characters long.');
    }
}
