<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\LastNameException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class LastName
{
    use ValueToStringTrait;

    public const MIN_LENGTH = 1;
    public const MAX_LENGTH = 32;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)
    {
        if (empty($value)) {
            throw LastNameException::emptyValue();
        }
        
        if (strlen($value) < self::MIN_LENGTH || strlen($value) > self::MAX_LENGTH) {
            throw LastNameException::invalidLength();
        }
    }
}
