<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class BrowserColorDepthException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): BrowserColorDepthException
    {
        return new self('Browser color depth should not be empty.');
    }

    public static function invalidValue(): BrowserColorDepthException
    {
        return new self('Browser color depth is not valid.');
    }
}
