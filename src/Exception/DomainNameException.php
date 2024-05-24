<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class DomainNameException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Domain name should not be empty.');
    }

    public static function invalidLength(): self
    {
        return new self('Domain name should be between 5 and 36 characters long.');
    }

    public static function invalidValue(): self
    {
        return new self('Domain name is not valid.');
    }
}
