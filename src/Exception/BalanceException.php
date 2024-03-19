<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class BalanceException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Balance should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Balance should be between 1 and 4 characters long.');
    }
}
