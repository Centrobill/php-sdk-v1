<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class CavvException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Cavv should not be empty.');
    }
}
