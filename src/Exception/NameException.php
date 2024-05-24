<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class NameException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Name should not be empty.');
    }
}
