<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class CodeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): CodeException
    {
        return new self('Code should not be empty.');
    }
}
