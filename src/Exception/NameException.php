<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class NameException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): NameException
    {
        return new self('Name should not be empty.');
    }

    public static function invalidLength(): NameException
    {
        return new self('Name length should be between 5 and 36 characters.');
    }
}
