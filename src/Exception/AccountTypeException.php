<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\AccountType;
use Exception;

class AccountTypeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): AccountTypeException
    {
        return new self('Account type should not be empty.');
    }

    public static function invalidValue(): AccountTypeException
    {
        return new self(
            sprintf(
                'Account type should be one of these values: [%s].',
                implode(', ', AccountType::toArray())
            )
        );
    }
}
