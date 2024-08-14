<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class IbanException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): IbanException
    {
        return new self('Iban should not be empty.');
    }

    public static function invalidLength(): IbanException
    {
        return new self('Iban should be between 5 and 34 characters long.');
    }
}
