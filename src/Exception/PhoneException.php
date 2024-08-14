<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class PhoneException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): PhoneException
    {
        return new self('Phone should not be empty.');
    }

    public static function invalidLength(): PhoneException
    {
        return new self('Phone should be between 7 and 18 characters long.');
    }

    public static function invalidValue(): PhoneException
    {
        return new self('Phone is not valid.');
    }
}
