<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class FullNameException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): FullNameException
    {
        return new self('Full name should not be empty.');
    }

    public static function invalidLength(): FullNameException
    {
        return new self('Full name should be between 1 and 64 characters long.');
    }
}
