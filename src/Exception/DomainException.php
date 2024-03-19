<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class DomainException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Domain should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Domain should be between 5 and 36 characters long.');
    }
}
