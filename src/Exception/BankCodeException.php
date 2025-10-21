<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class BankCodeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Bank code cannot be empty.');
    }

    public static function invalidLength(): self
    {
        return new self('Bank code exceeds maximum length of 20 characters.');
    }
}
