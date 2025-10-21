<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class DirectoryServerTransactionIdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Directory server transaction id should not be empty.');
    }
}
