<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class AllowedIpsException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): AllowedIpsException
    {
        return new self('Allowed ips should not be empty.');
    }
}
