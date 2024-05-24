<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class DeviceIdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Device id should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Device id should be at most 1024 characters long.');
    }
}
