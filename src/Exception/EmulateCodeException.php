<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class EmulateCodeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Emulate code should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Emulate code should be between 4 and 6 characters long.');
    }
}
