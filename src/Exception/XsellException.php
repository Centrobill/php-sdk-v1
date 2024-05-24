<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\Xsell;
use Exception;

class XsellException extends Exception
{
    public static function emptyValue()
    {
        return new self('Xsell should not be empty.');
    }

    public static function invalidValue()
    {
        return new self(
            sprintf(
                'Xsell should be one of these values: [%s].',
                implode(', ', Xsell::toArray())
            )
        );
    }
}
