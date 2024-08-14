<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class UrlException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): UrlException
    {
        return new self('URL should not be empty.');
    }

    public static function invalidValue(): UrlException
    {
        return new self('URL should be a valid URL.');
    }
}
