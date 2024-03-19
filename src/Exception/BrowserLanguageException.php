<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class BrowserLanguageException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Browser language should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Browser language should be at most 8 characters long.');
    }
}
