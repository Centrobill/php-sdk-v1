<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\IpException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Ip
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 1;
    public const MAX_LENGTH = 39;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw IpException::emptyValue();
        }

        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw IpException::invalidLength();
        }

        if (filter_var($value, FILTER_VALIDATE_IP) === false) {
            throw IpException::invalidFormat();
        }
        }
}
