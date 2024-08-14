<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class BrowserLanguageException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): BrowserLanguageException
    {
        return new self('Browser language should not be empty.');
    }

    public static function invalidLength(): BrowserLanguageException
    {
        return new self('Browser language should be at most 8 characters long.');
    }
}
