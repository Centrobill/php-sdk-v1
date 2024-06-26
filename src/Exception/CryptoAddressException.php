<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class CryptoAddressException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Address should not be empty.');
    }
}
