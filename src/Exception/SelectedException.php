<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\Selected;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class SelectedException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Selected should not be empty.');
    }

    public static function invalidValue()
    {
        return new self(
            sprintf(
                'Selected should be one of these values: [%s].',
                implode(', ', Selected::toArray())
            )
        );
    }
}
