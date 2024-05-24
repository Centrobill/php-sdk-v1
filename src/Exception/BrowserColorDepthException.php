<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class BrowserColorDepthException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Browser color depth should not be empty.');
    }

    public static function invalidValue()
    {
        return new self('Browser color depth is not valid.');
    }
}
