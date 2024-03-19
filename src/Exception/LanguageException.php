<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class LanguageException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Language should not be empty.');
    }
}
