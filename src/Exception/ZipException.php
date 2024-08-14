<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class ZipException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): ZipException
    {
        return new self('Zip should not be empty.');
    }

    public static function invalidLength(): ZipException
    {
        return new self('Zip should be between 1 and 16 characters long.');
    }
}
