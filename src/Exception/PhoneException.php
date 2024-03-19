<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class PhoneException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Phone should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Phone should be between 7 and 18 characters long.');
    }
}
