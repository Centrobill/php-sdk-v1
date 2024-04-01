<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\KeepActiveUntilNextRebillException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class KeepActiveUntilNextRebill
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw KeepActiveUntilNextRebillException::emptyValue();
        }
    }
}
