<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class LimitException extends Exception implements SDKExceptionInterface
{
    public static function invalidValue(): LimitException
    {
        return new self('Limit should be positive integer.');
    }
}
