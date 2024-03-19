<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class BirthdayException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Birthday should not be empty.');
    }
}
