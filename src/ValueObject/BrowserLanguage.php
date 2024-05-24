<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BrowserLanguageException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class BrowserLanguage
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 8;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw BrowserLanguageException::emptyValue();
        }

        if (strlen($value) > self::MAX_LENGTH) {
            throw BrowserLanguageException::invalidLength();
        }
    }
}
