<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class StateException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): StateException
    {
        return new self('State should not be empty.');
    }

    public static function invalidLength(): StateException
    {
        return new self('State should be between 1 and 32 characters long.');
    }
}
