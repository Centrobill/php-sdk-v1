<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BlockchainException;
use MyCLabs\Enum\Enum;

final class Blockchain extends Enum
{
    const BLOCKCHAIN_BTC = 'btc';
    const BLOCKCHAIN_ETH = 'eth';
    const BLOCKCHAIN_LTC = 'ltc';
    const BLOCKCHAIN_BCH = 'bch';
    const BLOCKCHAIN_DOGE = 'doge';
    const BLOCKCHAIN_DASH = 'dash';
    const BLOCKCHAIN_TRX = 'trx';
    const BLOCKCHAIN_BNB = 'bnb';
    const BLOCKCHAIN_XMR = 'xmr';
    const BLOCKCHAIN_USDT_TRC20 = 'usdt_trc20';
    const BLOCKCHAIN_USDT_ERC20 = 'usdt_erc20';
    const BLOCKCHAIN_USDT_BEP20 = 'usdt_bep20';

    static function isValid($value)
    {
        if (empty($value)) {
            throw BlockchainException::emptyValue();
        }
        if (!in_array($value, Blockchain::toArray())) {
            throw BlockchainException::invalidValue($value);
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
