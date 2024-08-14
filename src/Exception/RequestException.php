<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class RequestException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): RequestException
    {
        return new self('Request should not be empty.');
    }
}
