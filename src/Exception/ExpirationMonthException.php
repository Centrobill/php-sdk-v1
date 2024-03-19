<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class ExpirationMonthException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Expiration month should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Expiration month should be between 2 and 2 characters long.');
    }
}
