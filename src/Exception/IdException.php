<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class IdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): IdException
    {
        return new self('Id should not be empty.');
    }

    public static function invalidLength(): IdException
    {
        return new self('Id should be not more than 36 characters long.');
    }
}
