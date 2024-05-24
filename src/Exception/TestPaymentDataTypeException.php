<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\TestPaymentDataType;
use Exception;

class TestPaymentDataTypeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Type should not be empty.');
    }

    public static function invalidValue()
    {
        return new self(
            sprintf(
                'Type should be one of these values: [%s].',
                implode(', ', TestPaymentDataType::toArray())
            )
        );
    }
}
