<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class AccountNumberException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): AccountNumberException
    {
        return new self('Account number should not be empty.');
    }

    public static function invalidLength(): AccountNumberException
    {
        return new self('Account number should be at most 32 characters long.');
    }
}
