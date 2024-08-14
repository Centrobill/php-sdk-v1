<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\Country;
use Exception;

class CountryException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): CountryException
    {
        return new self('Country should not be empty.');
    }

    public static function invalidValue(): CountryException
    {
        return new self(
            sprintf(
                'Country should be one of these values: [%s].',
                implode(', ', Country::toArray())
            )
        );
    }
}
