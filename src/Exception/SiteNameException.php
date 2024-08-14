<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class SiteNameException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): SiteNameException
    {
        return new self('Site name should not be empty.');
    }

    public static function invalidValue(): SiteNameException
    {
        return new self('Site name should be a valid URL without protocol prefix.');
    }
}
