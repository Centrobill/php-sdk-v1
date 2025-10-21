<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class EvpException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('EVP cannot be empty.');
    }

    public static function invalidFormat(): self
    {
        return new self('EVP format is invalid.');
    }
}
