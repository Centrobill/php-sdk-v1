<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class ApiKeyException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('API key cannot be empty');
    }
}
