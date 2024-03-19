<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class IpException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Ip should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Ip should be between 1 and 16 characters long.');
    }
}
