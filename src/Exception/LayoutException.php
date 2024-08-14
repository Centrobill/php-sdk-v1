<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class LayoutException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): LayoutException
    {
        return new self('Layout should not be empty.');
    }
}
