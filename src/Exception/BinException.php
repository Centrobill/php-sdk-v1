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
        return new self('Bin should be between 6 and 8 characters long.');
    }
}
