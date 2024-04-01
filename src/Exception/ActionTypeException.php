<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class ActionTypeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Type should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Type should be between 5 and 36 characters long.');
    }
}
