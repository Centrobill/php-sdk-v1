<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class DomainException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Domain should not be empty.');
    }

    public static function invalidValue(): self
    {
        return new self('Domain should be a valid URL.');
    }
}
