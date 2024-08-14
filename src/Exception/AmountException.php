<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class AmountException extends Exception implements SDKExceptionInterface
{
    public static function invalidValue(): AmountException
    {
        return new self('Amount is not valid.');
    }
}
