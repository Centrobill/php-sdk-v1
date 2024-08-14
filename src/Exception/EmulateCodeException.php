<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class EmulateCodeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): EmulateCodeException
    {
        return new self('Emulate code should not be empty.');
    }

    public static function invalidLength(): EmulateCodeException
    {
        return new self('Emulate code should be between 4 and 6 characters long.');
    }
}
