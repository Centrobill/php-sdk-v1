<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class CvvException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Cvv should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Cvv should be between 3 and 4 characters long.');
    }
    
    public static function invalidValue()
    {
        return new self('Cvv should be numeric.');
    }
}
