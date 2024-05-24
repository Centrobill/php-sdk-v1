<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\PaymentSourceTypeException;
use MyCLabs\Enum\Enum;

final class PaymentSourceType extends Enum
{
    public const PAYMENT_SOURCE_PAYID = 'payid'; 
    public const PAYMENT_SOURCE_MYBANK = 'mybank'; 
    public const PAYMENT_SOURCE_APPLEPAY = 'applePay'; 
    public const PAYMENT_SOURCE_CONSUMER = 'consumer'; 
    public const PAYMENT_SOURCE_GASH = 'gash'; 
    public const PAYMENT_SOURCE_BANCONTACT = 'bancontact'; 
    public const PAYMENT_SOURCE_SOFORTBANKING = 'sofortbanking'; 
    public const PAYMENT_SOURCE_XONE = 'xone'; 
    public const PAYMENT_SOURCE_IDEAL = 'ideal'; 
    public const PAYMENT_SOURCE_TOKEN = 'token'; 
    public const PAYMENT_SOURCE_ONLINEBANKING = 'onlinebanking'; 
    public const PAYMENT_SOURCE_PAYSAFECARD = 'paysafecard'; 
    public const PAYMENT_SOURCE_EPS = 'eps'; 
    public const PAYMENT_SOURCE_PAYMENTACCOUNTID = 'paymentAccountId'; 
    public const PAYMENT_SOURCE_CARD = 'card'; 
    public const PAYMENT_SOURCE_PPS = 'pps'; 
    public const PAYMENT_SOURCE_SEPA = 'sepa'; 
    public const PAYMENT_SOURCE_CRYPTO = 'crypto'; 
    public const PAYMENT_SOURCE_PRZELEWYTWOFOUR = 'przelewytwofour'; 
    public const PAYMENT_SOURCE_ACH = 'ach'; 
    public const PAYMENT_SOURCE_GIROPAY = 'giropay'; 
    public const PAYMENT_SOURCE_PAYMENT_ACCOUNT_ID_WITH_CVV = 'paymentAccountIdWithCvv'; 

    public function __construct($value)
    {
        if (is_string($value)) {
            $value = trim(filter_var($value, FILTER_UNSAFE_RAW));
        }
        
        parent::__construct($value);
    }

    public static function isValid($value)
    {
        if (empty($value)) {
            throw PaymentSourceTypeException::emptyValue();
        }

        if (!in_array($value, PaymentSourceType::toArray())) {
            throw PaymentSourceTypeException::invalidValue();
        }
    }
}
