<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\AccountTypeException;
use MyCLabs\Enum\Enum;

final class AccountType extends Enum
{
    const ACCOUNT_TYPE_C = 'С';
    const ACCOUNT_TYPE_S = 'S';

    /**
     * @throws AccountTypeException
     */
    public static function isValid($value)
    {
        if (empty($value)) {
            throw AccountTypeException::emptyValue();
        }

        if (!in_array($value, AccountType::toArray())) {
            throw AccountTypeException::invalidValue();
        }
    }

    function __construct($value)
    {
        if (is_string($value)) {
            $value = trim(filter_var($value, FILTER_UNSAFE_RAW));
        }
        parent::__construct($value);
    }
}
