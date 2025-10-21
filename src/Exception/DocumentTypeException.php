<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class DocumentTypeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Document Type cannot be empty.');
    }

    public static function invalidLength(): self
    {
        return new self('Document Type exceeds maximum length of 50 characters.');
    }
}
