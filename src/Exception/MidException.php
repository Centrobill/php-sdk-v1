<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class MidException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Mid should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Mid should be between 2 and 36 characters long.');
    }
}
