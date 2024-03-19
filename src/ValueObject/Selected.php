<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\SelectedException;
use MyCLabs\Enum\Enum;

final class Selected extends Enum
{
    const SELECTED_CARD = 'card';
    const SELECTED_APPLEPAY = 'applepay';
    const SELECTED_SEPA = 'sepa';
    const SELECTED_SOFORTBANKING = 'sofortbanking';
    const SELECTED_IDEAL = 'ideal';
    const SELECTED_EPS = 'eps';
    const SELECTED_MYBANK = 'mybank';
    const SELECTED_BANCONTACT = 'bancontact';
    const SELECTED_GIROPAY = 'giropay';
    const SELECTED_PRZELEWY24 = 'przelewy24';
    const SELECTED_ONLINEBANKING = 'onlinebanking';
    const SELECTED_SKRILL = 'skrill';
    const SELECTED_CLICKANDBUY = 'clickandbuy';
    const SELECTED_PAYPAL = 'paypal';
    const SELECTED_PIX = 'pix';
    const SELECTED_BOLETO = 'boleto';
    const SELECTED_PPS = 'pps';
    const SELECTED_GASH = 'gash';
    const SELECTED_CRYPTO = 'crypto';
    const SELECTED_PAYGARDEN = 'paygarden';
    const SELECTED_ALIPAY = 'alipay';
    const SELECTED_WECHAT = 'wechat';
    const SELECTED_UNIONPAY_WALLET = 'unionpay_wallet';
    const SELECTED_VOUCHER = 'voucher';
    const SELECTED_PAYSAFECARD = 'paysafecard';
    const SELECTED_UKASH = 'ukash';
    const SELECTED_SAFEKLICK = 'safeklick';
    const SELECTED_SMS = 'sms';
    const SELECTED_X1 = 'x1';
    const SELECTED_LOTERICAS = 'lotericas';
    const SELECTED_PICPAY = 'picpay';
    const SELECTED_DEPOSIT_EXPRESS = 'deposit_express';
    const SELECTED_PAYID = 'payid';
    const SELECTED_SPEI = 'spei';
    const SELECTED_OXXO = 'oxxo';
    const SELECTED_CODI = 'codi';
    const SELECTED_TODITO = 'todito';
    const SELECTED_BANKTRANSFER = 'banktransfer';
    const SELECTED_CASHPAYMENT = 'cashpayment';
    const SELECTED_PSE = 'pse';
    const SELECTED_EFECTY = 'efecty';
    const SELECTED_TPAGA = 'tpaga';
    const SELECTED_PAGO46 = 'pago46';
    const SELECTED_KHIPU = 'khipu';
    const SELECTED_MULTIBANCO = 'multibanco';
    const SELECTED_BNCR = 'bncr';
    const SELECTED_MBWAY = 'mbway';

    static function isValid($value)
    {
        if (empty($value)) {
            throw SelectedException::emptyValue();
        }
        if (!in_array($value, Selected::toArray())) {
            throw SelectedException::invalidValue($value);
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
