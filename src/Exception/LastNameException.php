<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class LastNameException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Last name should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Last name should be between 1 and 32 characters long.');
    }
}
