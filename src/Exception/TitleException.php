<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class TitleException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Title should not be empty.');
    }

    public static function invalidLength(): self
    {
        return new self('Title should be between 3 and 128 characters long.');
    }
}
