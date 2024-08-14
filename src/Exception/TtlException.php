<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class TtlException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): TtlException
    {
        return new self('Ttl should not be empty.');
    }
}
