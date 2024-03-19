<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class RedirectUrlException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Redirect url should not be empty.');
    }
}
