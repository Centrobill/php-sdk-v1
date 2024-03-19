<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class StateException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('State should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('State should be between 1 and 32 characters long.');
    }
}
