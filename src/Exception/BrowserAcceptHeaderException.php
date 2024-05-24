<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class BrowserAcceptHeaderException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Browser accept header should not be empty.');
    }
}
