<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class CvvException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): CvvException
    {
        return new self('Cvv should not be empty.');
    }

    public static function invalidLength(): CvvException
    {
        return new self('Cvv should be between 3 and 4 characters long.');
    }

    public static function invalidValue(): CvvException
    {
        return new self('Cvv should be numeric.');
    }
}
