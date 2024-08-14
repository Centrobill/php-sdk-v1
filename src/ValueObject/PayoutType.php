<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\PayoutTypeException;
use MyCLabs\Enum\Enum;

final class PayoutType extends Enum
{
    const PAYOUT_TYPE_ACH = 'ach';
    const PAYOUT_TYPE_PAYID = 'payid';
    const PAYOUT_TYPE_CRYPTO = 'crypto';
    const PAYOUT_TYPE_SEPA = 'sepa';

    public function __construct($value)
    {
        if (is_string($value)) {
            $value = trim(filter_var($value, FILTER_UNSAFE_RAW));
        }

        parent::__construct($value);
    }

    /**
     * @throws PayoutTypeException
     */
    public static function isValid($value)
    {
        if (empty($value)) {
            throw PayoutTypeException::emptyValue();
        }

        if (!in_array($value, PaymentSourceType::toArray())) {
            throw PayoutTypeException::invalidValue();
        }
    }
}
