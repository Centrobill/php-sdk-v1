<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class ReasonException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Reason should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Reason should be at most 255 characters long.');
    }
}
