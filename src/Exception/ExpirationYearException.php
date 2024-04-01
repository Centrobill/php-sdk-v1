<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class ExpirationYearException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Expiration year should not be empty.');
    }

    public static function invalidLength(): self
    {
        return new self('Expiration year should be between 2 and 2 characters long.');
    }

    public static function invalidValue(): self
    {
        return new self('Expiration year is invalid.');
    }
}
