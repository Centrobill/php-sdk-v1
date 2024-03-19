<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class TestException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Test should not be empty.');
    }
}
