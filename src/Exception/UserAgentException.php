<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class UserAgentException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('User agent should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('User agent should be at most 255 characters long.');
    }
}
