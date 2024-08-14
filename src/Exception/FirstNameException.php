<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class FirstNameException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): FirstNameException
    {
        return new self('First name should not be empty.');
    }

    public static function invalidLength(): FirstNameException
    {
        return new self('First name should be between 1 and 32 characters long.');
    }
}
