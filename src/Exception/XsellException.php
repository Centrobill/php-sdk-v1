<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\Sku\Xsell;
use Exception;

class XsellException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): XsellException
    {
        return new self('Xsell should not be empty.');
    }

    public static function invalidValue(): XsellException
    {
        return new self(
            sprintf(
                'Xsell should be one of these values: [%s].',
                implode(', ', Xsell::toArray())
            )
        );
    }
}
