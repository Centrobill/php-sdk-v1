<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class BrowserAcceptHeaderException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): BrowserAcceptHeaderException
    {
        return new self('Browser accept header should not be empty.');
    }
}
