<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class CnpjException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('CNPJ cannot be empty.');
    }

    public static function invalidLength(): self
    {
        return new self('CNPJ must be exactly 14 characters long.');
    }
}
