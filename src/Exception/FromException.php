<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class FromException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('From should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('From should be between 3 and 16 characters long.');
    }
}
