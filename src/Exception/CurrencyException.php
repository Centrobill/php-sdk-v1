<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class CurrencyException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Currency should not be empty.');
    }
}
