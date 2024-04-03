<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\CurrencyException;
use MyCLabs\Enum\Enum;

final class Currency extends Enum
{
    const CODE_AED = 'AED';
    const CODE_ALL = 'ALL';
    const CODE_AMD = 'AMD';
    const CODE_ANG = 'ANG';
    const CODE_ARS = 'ARS';
    const CODE_AUD = 'AUD';
    const CODE_AWG = 'AWG';
    const CODE_BAM = 'BAM';
    const CODE_BBD = 'BBD';
    const CODE_BDT = 'BDT';
    const CODE_BGN = 'BGN';
    const CODE_BHD = 'BHD';
    const CODE_BIF = 'BIF';
    const CODE_BMD = 'BMD';
    const CODE_BND = 'BND';
    const CODE_BOB = 'BOB';
    const CODE_BRL = 'BRL';
    const CODE_BSD = 'BSD';
    const CODE_BTN = 'BTN';
    const CODE_BWP = 'BWP';
    const CODE_BYR = 'BYR';
    const CODE_BZD = 'BZD';
    const CODE_CAD = 'CAD';
    const CODE_CHF = 'CHF';
    const CODE_CLP = 'CLP';
    const CODE_CNY = 'CNY';
    const CODE_COP = 'COP';
    const CODE_CRC = 'CRC';
    const CODE_CUP = 'CUP';
    const CODE_CVE = 'CVE';
    const CODE_CZK = 'CZK';
    const CODE_DJF = 'DJF';
    const CODE_DKK = 'DKK';
    const CODE_DOP = 'DOP';
    const CODE_DZD = 'DZD';
    const CODE_EGP = 'EGP';
    const CODE_ERN = 'ERN';
    const CODE_ETB = 'ETB';
    const CODE_EUR = 'EUR';
    const CODE_FJD = 'FJD';
    const CODE_FKP = 'FKP';
    const CODE_GBP = 'GBP';
    const CODE_GEL = 'GEL';
    const CODE_GIP = 'GIP';
    const CODE_GMD = 'GMD';
    const CODE_GTQ = 'GTQ';
    const CODE_GYD = 'GYD';
    const CODE_HKD = 'HKD';
    const CODE_HNL = 'HNL';
    const CODE_HRK = 'HRK';
    const CODE_HTG = 'HTG';
    const CODE_HUF = 'HUF';
    const CODE_IDR = 'IDR';
    const CODE_ILS = 'ILS';
    const CODE_INR = 'INR';
    const CODE_IQD = 'IQD';
    const CODE_IRR = 'IRR';
    const CODE_ISK = 'ISK';
    const CODE_JMD = 'JMD';
    const CODE_JOD = 'JOD';
    const CODE_JPY = 'JPY';
    const CODE_KES = 'KES';
    const CODE_KGS = 'KGS';
    const CODE_KHR = 'KHR';
    const CODE_KMF = 'KMF';
    const CODE_KPW = 'KPW';
    const CODE_KRW = 'KRW';
    const CODE_KWD = 'KWD';
    const CODE_KYD = 'KYD';
    const CODE_KZT = 'KZT';
    const CODE_LAK = 'LAK';
    const CODE_LBP = 'LBP';
    const CODE_LKR = 'LKR';
    const CODE_LRD = 'LRD';
    const CODE_LSL = 'LSL';
    const CODE_LTL = 'LTL';
    const CODE_LVL = 'LVL';
    const CODE_LYD = 'LYD';
    const CODE_MAD = 'MAD';
    const CODE_MDL = 'MDL';
    const CODE_MKD = 'MKD';
    const CODE_MMK = 'MMK';
    const CODE_MNT = 'MNT';
    const CODE_MOP = 'MOP';
    const CODE_MRO = 'MRO';
    const CODE_MUR = 'MUR';
    const CODE_MVR = 'MVR';
    const CODE_MWK = 'MWK';
    const CODE_MXN = 'MXN';
    const CODE_MYR = 'MYR';
    const CODE_NAD = 'NAD';
    const CODE_NGN = 'NGN';
    const CODE_NIO = 'NIO';
    const CODE_NOK = 'NOK';
    const CODE_NPR = 'NPR';
    const CODE_NZD = 'NZD';
    const CODE_OMR = 'OMR';
    const CODE_PAB = 'PAB';
    const CODE_PEN = 'PEN';
    const CODE_PGK = 'PGK';
    const CODE_PHP = 'PHP';
    const CODE_PKR = 'PKR';
    const CODE_PLN = 'PLN';
    const CODE_PYG = 'PYG';
    const CODE_QAR = 'QAR';
    const CODE_RON = 'RON';
    const CODE_RSD = 'RSD';
    const CODE_RUB = 'RUB';
    const CODE_RWF = 'RWF';
    const CODE_SAR = 'SAR';
    const CODE_SBD = 'SBD';
    const CODE_SCR = 'SCR';
    const CODE_SDG = 'SDG';
    const CODE_SEK = 'SEK';
    const CODE_SGD = 'SGD';
    const CODE_SLL = 'SLL';
    const CODE_SOS = 'SOS';
    const CODE_SRD = 'SRD';
    const CODE_SSP = 'SSP';
    const CODE_STD = 'STD';
    const CODE_SYP = 'SYP';
    const CODE_SZL = 'SZL';
    const CODE_THB = 'THB';
    const CODE_TND = 'TND';
    const CODE_TOP = 'TOP';
    const CODE_TRY = 'TRY';
    const CODE_TTD = 'TTD';
    const CODE_TWD = 'TWD';
    const CODE_TZS = 'TZS';
    const CODE_UAH = 'UAH';
    const CODE_USD = 'USD';
    const CODE_UYU = 'UYU';
    const CODE_UZS = 'UZS';
    const CODE_VND = 'VND';
    const CODE_VUV = 'VUV';
    const CODE_WST = 'WST';
    const CODE_XAF = 'XAF';
    const CODE_XAG = 'XAG';
    const CODE_XAU = 'XAU';
    const CODE_XCD = 'XCD';
    const CODE_XDR = 'XDR';
    const CODE_XOF = 'XOF';
    const CODE_XPF = 'XPF';
    const CODE_XPT = 'XPT';
    const CODE_YER = 'YER';
    const CODE_ZAR = 'ZAR';

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
            throw CurrencyException::emptyValue();
        }

        if (!in_array($value, Currency::toArray())) {
            throw CurrencyException::invalidValue($value);
        }
    }
}
