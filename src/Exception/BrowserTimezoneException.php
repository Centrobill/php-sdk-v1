<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class BrowserTimezoneException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): BrowserTimezoneException
    {
        return new self('Browser timezone should not be empty.');
    }
}
