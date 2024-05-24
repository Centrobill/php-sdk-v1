<?php

namespace Centrobill\Sdk\ValueObject\Sku;

use Centrobill\Sdk\Exception\SiteIdException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class SiteId
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 5;
    public const MAX_LENGTH = 36;

    function checkValue($value)
    {
        if (empty($value)) {
            throw SiteIdException::emptyValue();
        }
        
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw SiteIdException::invalidLength();
        }
    }
}
