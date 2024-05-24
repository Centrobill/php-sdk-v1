<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ChannelException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Channel
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)
    {
        if (empty($value)) {
            throw ChannelException::emptyValue();
        }
    }
}
