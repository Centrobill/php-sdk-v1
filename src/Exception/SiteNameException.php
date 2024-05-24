<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class SiteNameException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Site name should not be empty.');
    }

    public static function invalidValue()
    {
        return new self('Site name should be a valid URL without protocol prefix.');
    }
}
