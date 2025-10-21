<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\PayoutTypeException;
use MyCLabs\Enum\Enum;

final class PayoutType extends Enum
{
    public const PAYOUT_TYPE_ACH = 'ach';
    public const PAYOUT_TYPE_PAYID = 'payid';
    public const PAYOUT_TYPE_CARD = 'card';
    public const PAYOUT_TYPE_CRYPTO = 'crypto';
    public const PAYOUT_TYPE_SEPA = 'sepa';
    public const PAYOUT_TYPE_PIX = 'pix';
    public const PAYOUT_TYPE_BANKTRANSFER = 'banktransfer';

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
    public static function isValid($value): bool
    {
        if (empty($value)) {
            throw PayoutTypeException::emptyValue();
        }

        if (!in_array($value, PaymentSourceType::toArray())) {
            throw PayoutTypeException::invalidValue();
        }

        return true;
    }
}
