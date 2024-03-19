<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class UsernameException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Username should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Username should be between 1 and 255 characters long.');
    }
}
