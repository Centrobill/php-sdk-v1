<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class BrowserScreenHeightException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Browser screen height should not be empty.');
    }
}
