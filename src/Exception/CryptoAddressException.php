<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class CryptoAddressException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): CryptoAddressException
    {
        return new self('Address should not be empty.');
    }
}
