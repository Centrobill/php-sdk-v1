<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class ExternalIdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): ExternalIdException
    {
        return new self('External id should not be empty.');
    }

    public static function invalidLength(): ExternalIdException
    {
        return new self('External id should be between 3 and 64 characters long.');
    }
}
