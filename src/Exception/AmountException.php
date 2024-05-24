<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class AmountException extends Exception implements SDKExceptionInterface
{
    public static function invalidValue(): self
    {
        return new self('Amount is not valid.');
    }
}
