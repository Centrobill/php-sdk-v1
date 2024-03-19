<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class SendEmailException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Send email should not be empty.');
    }
}
