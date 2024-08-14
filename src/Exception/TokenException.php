<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class TokenException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): TokenException
    {
        return new self('Token should not be empty.');
    }

    public static function invalidLength(): TokenException
    {
        return new self('Token should be at most 512 characters long.');
    }
}
