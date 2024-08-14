<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class UserAgentException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): UserAgentException
    {
        return new self('User agent should not be empty.');
    }

    public static function invalidLength(): UserAgentException
    {
        return new self('User agent should be at most 255 characters long.');
    }
}
