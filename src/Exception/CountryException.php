<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class CountryException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Country should not be empty.');
    }
}
