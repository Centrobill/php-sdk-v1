<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class FeeException extends Exception implements SDKExceptionInterface
{
    public static function emptyItems(): FeeException
    {
        return new self('Fee items should not be empty.');
    }
}
