<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class AmountException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): AmountException
    {
        return new self('Amount should not be empty.');
    }
}
