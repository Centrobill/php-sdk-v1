<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class IpException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): IpException
    {
        return new self('Ip should not be empty.');
    }

    public static function invalidLength(): IpException
    {
        return new self('Ip should be between 1 and 39 characters long.');
    }

    public static function invalidFormat(): IpException
    {
        return new self('Ip is not valid.');
    }
}
