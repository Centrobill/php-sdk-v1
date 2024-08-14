<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class BrowserScreenWidthException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): BrowserScreenWidthException
    {
        return new self('Browser screen width should not be empty.');
    }

    public static function invalidValue(): BrowserScreenWidthException
    {
        return new self('Browser screen width is not valid.');
    }
}
