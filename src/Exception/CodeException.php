<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class CodeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Code should not be empty.');
    }
}
