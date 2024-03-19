<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class BinException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Bin should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Bin should be between 100000 and 99999999 characters long.');
    }
}
