<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class PaymentAccountIdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): PaymentAccountIdException
    {
        return new self('Payment account id should not be empty.');
    }

    public static function invalidFormat(): PaymentAccountIdException
    {
        return new self('Payment account id should be valid UUID.');
    }
}
