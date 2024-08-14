<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class BrowserScreenHeightException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): BrowserScreenHeightException
    {
        return new self('Browser screen height should not be empty.');
    }

    public static function invalidValue(): BrowserScreenHeightException
    {
        return new self('Browser screen height is not valid.');
    }
}
