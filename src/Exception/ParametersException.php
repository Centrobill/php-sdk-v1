<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class ParametersException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Parameters should not be empty.');
    }
}
