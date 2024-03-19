<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class PaymentAccountIdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Payment account id should not be empty.');
    }
}
