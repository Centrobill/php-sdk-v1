<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class ParametersException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): ParametersException
    {
        return new self('Parameters should not be empty.');
    }
}
