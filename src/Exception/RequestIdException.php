<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class RequestIdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): RequestIdException
    {
        return new self('Request id should not be empty.');
    }
}
