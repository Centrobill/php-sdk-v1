<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class SecureException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Secure should not be empty.');
    }
}
