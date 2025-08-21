<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class FeeValueException extends Exception implements SDKExceptionInterface
{
    public static function invalidValue(): FeeValueException
    {
        return new self('Fee value should be positive float.');
    }
}
