<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class UrlException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('URL should not be empty.');
    }

    public static function invalidValue()
    {
        return new self('URL should be a valid URL.');
    }
}
