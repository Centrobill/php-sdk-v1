<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\TestPaymentDataType;
use Exception;

class TestPaymentDataTypeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): TestPaymentDataTypeException
    {
        return new self('Type should not be empty.');
    }

    public static function invalidValue(): TestPaymentDataTypeException
    {
        return new self(
            sprintf(
                'Type should be one of these values: [%s].',
                implode(', ', TestPaymentDataType::toArray())
            )
        );
    }
}
