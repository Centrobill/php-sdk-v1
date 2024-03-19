<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BrowserLanguageException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class BrowserLanguage
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 8;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw BrowserLanguageException::emptyValue();
        }
        if (strlen($value) > self::MAX_LENGTH) {
            throw BrowserLanguageException::invalidLength();
        }
    }
}
