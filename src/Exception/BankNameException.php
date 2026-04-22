<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class BankNameException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Bank name cannot be empty');
    }

    public static function invalidLength(): self
    {
        return new self('Bank name should not exceed 100 characters.');
    }
}
