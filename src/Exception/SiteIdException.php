<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class SiteIdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): SiteIdException
    {
        return new self('Site id should not be empty.');
    }

    public static function invalidLength(): SiteIdException
    {
        return new self('Site id should be between 5 and 36 characters long.');
    }
}
