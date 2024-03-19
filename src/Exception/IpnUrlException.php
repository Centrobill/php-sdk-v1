<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class IpnUrlException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Ipn url should not be empty.');
    }
}
