<?php

namespace Centrobill\Sdk\ValueObject\Sku;

use Centrobill\Sdk\Exception\SkuTypeException;
use MyCLabs\Enum\Enum;

class SkuType extends Enum
{
    const SKU_ONE_TIME = 'one-time';
    const SKU_SUBSCRIPTION = 'subscription';

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
            throw SkuTypeException::emptyValue();
        }

        if (!in_array($value, SkuType::toArray())) {
            throw SkuTypeException::invalidValue($value);
        }
    }
}