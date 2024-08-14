<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class BinException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Bin should not be empty.');
    }

    public static function invalidLength(): BinException
    {
        return new self('Bin should be between 6 and 8 characters long.');
    }
}
