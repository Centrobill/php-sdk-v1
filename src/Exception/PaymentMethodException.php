<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\PaymentMethod;
use Exception;

class PaymentMethodException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): PaymentMethodException
    {
        return new self('Method should not be empty.');
    }

    public static function invalidValue(): PaymentMethodException
    {
        return new self(
            sprintf(
                'Method should be one of these values: [%s].',
                implode(', ', PaymentMethod::toArray())
            )
        );
    }
}
