<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class ReasonException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): ReasonException
    {
        return new self('Reason should not be empty.');
    }

    public static function invalidLength(): ReasonException
    {
        return new self('Reason should be at most 255 characters long.');
    }
}
