<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class BrowserJavaEnabledException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Browser java enabled should not be empty.');
    }
}
