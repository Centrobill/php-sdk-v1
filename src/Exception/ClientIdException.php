<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class ClientIdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Client id cannot be empty');
    }
}
