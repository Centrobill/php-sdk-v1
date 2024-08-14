<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class LanguageException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): LanguageException
    {
        return new self('Language should not be empty.');
    }

    public static function invalidLength(): LanguageException
    {
        return new self('Language should be 2 characters long.');
    }
}
