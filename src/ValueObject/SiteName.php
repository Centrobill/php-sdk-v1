<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\SiteNameException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class SiteName
{
    use ValueToStringTrait;

    /**
     * @throws SiteNameException
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw SiteNameException::emptyValue();
        }

        if (!preg_match('/^([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,}$/', $value)) {
            throw SiteNameException::invalidValue();
        }
    }
}
