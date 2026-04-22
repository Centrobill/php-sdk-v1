<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class CpfException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): CpfException
    {
        return new self('CPF should not be empty.');
    }

    public static function invalidLength(): CpfException
    {
        return new self('CPF should have 11 digits.');
    }
}
