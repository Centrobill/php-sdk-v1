<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class EmailOptionsException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Email options should not be empty.');
    }
}
