<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ScaExemptionException;
use MyCLabs\Enum\Enum;

final class ScaExemption extends Enum
{
    public const SCA_LOW_VALUE = "lowValue";
    public const SCA_TRA = "tra";
    public const SCA_MERCHANT_WHITELIST = "merchantWhitelist";
    public const SCA_RECURRING_TRANSACTION = "recurringTransaction";
    public const SCA_TRUSTED_BENEFICIARY = "trustedBeneficiary";
    public const SCA_MOTO = "moto";

    public function __construct($value)
    {
        if (is_string($value)) {
            $value = trim(filter_var($value, FILTER_UNSAFE_RAW));
        }

        parent::__construct($value);
    }

    /**
     * @throws ScaExemptionException
     */
    public static function isValid($value): bool
    {
        if (empty($value)) {
            throw ScaExemptionException::emptyValue();
        }

        if (!in_array($value, PaymentSourceType::toArray())) {
            throw ScaExemptionException::invalidValue();
        }

        return true;
    }
}
