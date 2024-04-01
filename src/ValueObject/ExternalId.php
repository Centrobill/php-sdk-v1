<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ExternalIdException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class ExternalId
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 3;
    public const MAX_LENGTH = 64;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw ExternalIdException::emptyValue();
        }
        
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw ExternalIdException::invalidLength();
        }
    }
}
