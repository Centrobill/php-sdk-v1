<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\TerminalModeException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class TerminalMode
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw TerminalModeException::emptyValue();
        }
    }
}
