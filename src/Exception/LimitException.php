<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class LimitException extends Exception implements SDKExceptionInterface
{
    public static function invalidValue()
    {
        return new self('Limit should be positive integer.');
    }
}
