<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\LanguageException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Language
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw LanguageException::emptyValue();
        }
    }
}
