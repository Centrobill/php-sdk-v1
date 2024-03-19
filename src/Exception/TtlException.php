<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class TtlException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Ttl should not be empty.');
    }
}
