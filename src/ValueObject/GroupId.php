<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\GroupIdException;
use MyCLabs\Enum\Enum;

final class GroupId extends Enum
{
    const GROUP_ID_1 = '1';
    const GROUP_ID_2 = '2';
    const GROUP_ID_3 = '3';
    const GROUP_ID_4 = '4';
    const GROUP_ID_5 = '5';

    static function isValid($value)
    {
        if (empty($value)) {
            throw GroupIdException::emptyValue();
        }
        if (!in_array($value, GroupId::toArray())) {
            throw GroupIdException::invalidValue($value);
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
