<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class IdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Id should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Id should be between 5 and 36 characters long.');
    }
}
