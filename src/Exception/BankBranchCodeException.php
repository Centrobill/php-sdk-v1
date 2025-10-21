<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class BankBranchCodeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Bank branch code cannot be empty.');
    }

    public static function invalidLength(): self
    {
        return new self('Bank branch code exceeds maximum length of 20 characters.');
    }
}
