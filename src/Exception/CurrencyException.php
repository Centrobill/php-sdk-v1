<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\Currency;
use Exception;

class CurrencyException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): CurrencyException
    {
        return new self('Currency should not be empty.');
    }

    public static function invalidValue(): CurrencyException
    {
        return new self(
            sprintf(
                'Currency should be one of these values: [%s].',
                implode(', ', Currency::toArray())
            )
        );
    }
}
