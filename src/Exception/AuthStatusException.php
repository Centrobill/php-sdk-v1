<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class AuthStatusException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Auth status cannot be empty');
    }
}
