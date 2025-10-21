<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class BankBranchException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Bank branch cannot be empty.');
    }

    public static function invalidLength(): self
    {
        return new self('Bank branch exceeds maximum length of 100 characters.');
    }

    public static function invalidFormat(): self
    {
        return new self(
            'Bank branch contains invalid characters. Spaces are not allowed; use an underscore ("_") if a separator is needed.'
        );
    }
}
