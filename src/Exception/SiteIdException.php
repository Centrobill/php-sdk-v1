<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class SiteIdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Site id should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Site id should be between 5 and 36 characters long.');
    }
}
