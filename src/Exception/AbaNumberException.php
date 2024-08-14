<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class AbaNumberException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): AbaNumberException
    {
        return new self('Aba number should not be empty.');
    }

    public static function invalidLength(): AbaNumberException
    {
        return new self('Aba number should be at most 32 characters long.');
    }
}
