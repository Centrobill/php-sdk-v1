<?php

namespace Centrobill\Sdk\ValueObject\Sku;

use Centrobill\Sdk\Exception\DomainNameException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class DomainName
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 5;

    public const MAX_LENGTH = 36;

    /**
     * @throws DomainNameException
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw DomainNameException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw DomainNameException::invalidLength();
        }

        if (!filter_var($value, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME)) {
            throw DomainNameException::invalidValue();
        }
    }
}
