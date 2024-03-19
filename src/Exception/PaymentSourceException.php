<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class PaymentSourceException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Payment source should not be empty.');
    }
}
