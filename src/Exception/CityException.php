<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class CityException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('City should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('City should be between 1 and 50 characters long.');
    }
}
