<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class PayidException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): PayidException
    {
        return new self('Payid should not be empty.');
    }
}
