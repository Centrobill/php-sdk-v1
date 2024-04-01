<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class ApiKeyException extends Exception
{
    public static function emptyValue(): self
    {
        return new self('API key cannot be empty');
    }
}
