<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\EmulatethreedsException;
use Centrobill\Sdk\ValueObject\Traitss\ValueToStringTrait;

final class Emulatethreeds
{
    use ValueToStringTrait;

    function checkValue($value)
    {
        if (empty($value)) {
            throw EmulatethreedsException::emptyValue();
        }
    }
}
