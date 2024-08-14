<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class AddressException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): AddressException
    {
        return new self('Address should not be empty.');
    }

    public static function invalidLength(): AddressException
    {
        return new self('Address should be at most 64 characters long.');
    }
}
