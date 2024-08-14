<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class DeviceIdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): DeviceIdException
    {
        return new self('Device id should not be empty.');
    }

    public static function invalidLength(): DeviceIdException
    {
        return new self('Device id should be at most 1024 characters long.');
    }
}
