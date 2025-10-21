<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class DocumentIdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Document ID cannot be empty.');
    }

    public static function invalidLength(): self
    {
        return new self('Document ID exceeds maximum length of 50 characters.');
    }
}
