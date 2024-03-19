<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class ZipException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Zip should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Zip should be between 1 and 16 characters long.');
    }
}
