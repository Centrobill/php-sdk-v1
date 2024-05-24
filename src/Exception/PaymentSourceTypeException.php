<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\PaymentSourceType;
use Exception;

class PaymentSourceTypeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Source type should not be empty.');
    }

    public static function invalidValue()
    {
        return new self(
            sprintf(
                'Source type should be one of these values: [%s].',
                implode(', ', PaymentSourceType::toArray())
            )
        );
    }
}