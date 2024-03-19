<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class TerminalModeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Terminal mode should not be empty.');
    }
}
