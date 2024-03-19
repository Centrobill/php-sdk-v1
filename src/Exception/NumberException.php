<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class NumberException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Number should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Number should be between 12 and 19 characters long.');
    }
}
