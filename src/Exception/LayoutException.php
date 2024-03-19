<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class LayoutException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Layout should not be empty.');
    }
}
