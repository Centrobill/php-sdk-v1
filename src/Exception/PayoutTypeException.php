<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\PayoutType;
use Exception;

class PayoutTypeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): PayoutTypeException
    {
        return new self('Payout type should not be empty.');
    }

    public static function invalidValue(): PayoutTypeException
    {
        return new self(
            sprintf(
                'Payout type should be one of these values: [%s].',
                implode(', ', PayoutType::toArray())
            )
        );
    }
}
