<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class OffsetException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Offset should not be empty.');
    }

    public static function invalidLength(): self
    {
        return new self('Offset should be at most 13 characters long.');
    }

    public static function invalidValue(): self
    {
        return new self('Offset is not valid.');
    }
}
