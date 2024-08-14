<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class ActionTypeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): ActionTypeException
    {
        return new self('Type should not be empty.');
    }

    public static function invalidLength(): ActionTypeException
    {
        return new self('Type should be between 5 and 36 characters long.');
    }
}
