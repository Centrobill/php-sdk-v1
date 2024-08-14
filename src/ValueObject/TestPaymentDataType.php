<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\TestPaymentDataTypeException;
use MyCLabs\Enum\Enum;

final class TestPaymentDataType extends Enum
{
    const TEST_PAYMENT_DATE_TYPE_MAESTRO = 'maestro';
    const TEST_PAYMENT_DATE_TYPE_MASTER_CARD = 'mastercard';
    const TEST_PAYMENT_DATE_TYPE_SEPA = 'sepa';
    const TEST_PAYMENT_DATE_TYPE_VISA = 'visa';
    const TEST_PAYMENT_DATE_TYPE_DISCOVER = 'discover';
    const TEST_PAYMENT_DATE_TYPE_UNIONPAY = 'unionpay';
    const TEST_PAYMENT_DATE_TYPE_JCB = 'jcb';
    const TEST_PAYMENT_DATE_TYPE_DINERS_INTERNATIONAL = 'diners';
    const TEST_PAYMENT_DATE_TYPE_AMEX = 'amex';

    public function __construct($value)
    {
        if (is_string($value)) {
            $value = trim(filter_var($value, FILTER_UNSAFE_RAW));
        }

        parent::__construct($value);
    }

    /**
     * @throws TestPaymentDataTypeException
     */
    public static function isValid($value)
    {
        if (empty($value)) {
            throw TestPaymentDataTypeException::emptyValue();
        }

        if (!in_array($value, PaymentSourceType::toArray())) {
            throw TestPaymentDataTypeException::invalidValue();
        }
    }
}
