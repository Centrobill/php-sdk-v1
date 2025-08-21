<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class FeesTypeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): FeesTypeException
    {
        return new self('Fee type should not be empty.');
    }
}
