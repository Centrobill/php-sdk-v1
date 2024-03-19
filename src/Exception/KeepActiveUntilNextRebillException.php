<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class KeepActiveUntilNextRebillException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Keep active until next rebill should not be empty.');
    }
}
