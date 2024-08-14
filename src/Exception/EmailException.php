<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class EmailException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Email should not be empty.');
    }

    public static function invalidValue(): self
    {
        return new self('Email must be a valid email address.');
    }
}
