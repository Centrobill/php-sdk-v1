<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class BrowserTimezoneException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Browser timezone should not be empty.');
    }
}
