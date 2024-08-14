<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class ValueException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): ValueException
    {
        return new self('Value should not be empty.');
    }

    public static function invalidLength(): ValueException
    {
        return new self('Value should be between 5 and 36 characters long.');
    }
}
