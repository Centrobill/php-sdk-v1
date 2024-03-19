<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class EmailException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): EmailException
    {
        return new self('Email should not be empty.');
    }
}
