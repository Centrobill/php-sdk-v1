<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class Emulate3dsException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Emulate3ds should not be empty.');
    }
}
