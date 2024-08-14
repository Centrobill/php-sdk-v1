<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\PaymentSourceType;
use Exception;

class PaymentSourceTypeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): PaymentSourceTypeException
    {
        return new self('Source type should not be empty.');
    }

    public static function invalidValue(): PaymentSourceTypeException
    {
        return new self(
            sprintf(
                'Source type should be one of these values: [%s].',
                implode(', ', PaymentSourceType::toArray())
            )
        );
    }
}
