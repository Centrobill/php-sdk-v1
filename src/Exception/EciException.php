<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class EciException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Eci should not be empty.');
    }
}
