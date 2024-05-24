<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\AccountType;
use Exception;

class AccountTypeException extends Exception
{
    public static function emptyValue()
    {
        return new self('Account type should not be empty.');
    }

    public static function invalidValue()
    {
        return new self(
            sprintf(
                'Account type should be one of these values: [%s].',
                implode(', ', AccountType::toArray())
            )
        );
    }
}
