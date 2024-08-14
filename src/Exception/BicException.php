<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class BicException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Bic should not be empty.');
    }

    public static function invalidLength(): self
    {
        return new self('Bic should be between 8 and 11 characters long.');
    }
}
