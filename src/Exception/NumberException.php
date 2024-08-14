<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class NumberException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): NumberException
    {
        return new self('Number should not be empty.');
    }

    public static function invalidLength(): NumberException
    {
        return new self('Number should be between 12 and 19 characters long.');
    }
}
