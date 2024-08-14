<?php

namespace Centrobill\Sdk\ValueObject\Sku;

use Centrobill\Sdk\Exception\XsellException;
use MyCLabs\Enum\Enum;

final class Xsell extends Enum
{
    const XSELL_CHECKED = 'checked';
    const XSELL_UNCHECKED = 'unchecked';

    /**
     * @throws XsellException
     */
    public static function isValid($value)
    {
        if (empty($value)) {
            throw XsellException::emptyValue();
        }

        if (!in_array($value, Xsell::toArray())) {
            throw XsellException::invalidValue();
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
