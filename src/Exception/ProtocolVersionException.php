<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class ProtocolVersionException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Protocol version should not be empty.');
    }
}
