<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class NameException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Name should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Name length should be between 5 and 36 characters.');
    }
}
