<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class BrowserScreenWidthException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Browser screen width should not be empty.');
    }

    public static function invalidValue()
    {
        return new self('Browser screen width is not valid.');
    }
}
