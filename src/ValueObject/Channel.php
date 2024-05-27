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
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw ChannelException::emptyValue();
        }
    }
}
