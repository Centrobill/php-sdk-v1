<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\PaymentMethodException;
use MyCLabs\Enum\Enum;

final class PaymentMethod extends Enum
{
    const PAYMENT_METHOD_CARD = "card";
    const PAYMENT_METHOD_APPLEPAY = "applepay";
    const PAYMENT_METHOD_SEPA = "sepa";
    const PAYMENT_METHOD_SOFORTBANKING = "sofortbanking";
    const PAYMENT_METHOD_IDEAL = "ideal";
    const PAYMENT_METHOD_EPS = "eps";
    const PAYMENT_METHOD_MYBANK = "mybank";
    const PAYMENT_METHOD_BANCONTACT = "bancontact";
    const PAYMENT_METHOD_GIROPAY = "giropay";
    const PAYMENT_METHOD_PRZELEWY24 = "przelewy24";
    const PAYMENT_METHOD_ONLINEBANKING = "onlinebanking";
    const PAYMENT_METHOD_SKRILL = "skrill";
    const PAYMENT_METHOD_CLICKANDBUY = "clickandbuy";
    const PAYMENT_METHOD_PAYPAL = "paypal";
    const PAYMENT_METHOD_PIX = "pix";
    const PAYMENT_METHOD_BOLETO = "boleto";
    const PAYMENT_METHOD_PPS = "pps";
    const PAYMENT_METHOD_GASH = "gash";
    const PAYMENT_METHOD_CRYPTO = "crypto";
    const PAYMENT_METHOD_PAYGARDEN = "paygarden";
    const PAYMENT_METHOD_ALIPAY = "alipay";
    const PAYMENT_METHOD_WECHAT = "wechat";
    const PAYMENT_METHOD_UNIONPAY_WALLET = "unionpay_wallet";
    const PAYMENT_METHOD_VOUCHER = "voucher";
    const PAYMENT_METHOD_PAYSAFECARD = "paysafecard";
    const PAYMENT_METHOD_UKASH = "ukash";
    const PAYMENT_METHOD_SAFEKLICK = "safeklick";
    const PAYMENT_METHOD_SMS = "sms";
    const PAYMENT_METHOD_X1 = "x1";
    const PAYMENT_METHOD_LOTERICAS = "lotericas";
    const PAYMENT_METHOD_PICPAY = "picpay";
    const PAYMENT_METHOD_DEPOSIT_EXPRESS = "deposit_express";
    const PAYMENT_METHOD_PAYID = "payid";
    const PAYMENT_METHOD_SPEI = "spei";
    const PAYMENT_METHOD_OXXO = "oxxo";
    const PAYMENT_METHOD_CODI = "codi";
    const PAYMENT_METHOD_TODITO = "todito";
    const PAYMENT_METHOD_BANKTRANSFER = "banktransfer";
    const PAYMENT_METHOD_CASHPAYMENT = "cashpayment";
    const PAYMENT_METHOD_PSE = "pse";
    const PAYMENT_METHOD_EFECTY = "efecty";
    const PAYMENT_METHOD_TPAGA = "tpaga";
    const PAYMENT_METHOD_PAGO46 = "pago46";
    const PAYMENT_METHOD_KHIPU = "khipu";
    const PAYMENT_METHOD_MULTIBANCO = "multibanco";
    const PAYMENT_METHOD_BNCR = "bncr";
    const PAYMENT_METHOD_MBWAY = "mbway";

    /**
     * @throws PaymentMethodException
     */
    public static function isValid($value)
    {
        if (empty($value)) {
            throw PaymentMethodException::emptyValue();
        }

        if (!in_array($value, PaymentMethod::toArray())) {
            throw PaymentMethodException::invalidValue();
        }
    }
}
