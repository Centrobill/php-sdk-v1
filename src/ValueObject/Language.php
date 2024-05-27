<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\LanguageException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Language
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 2;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw LanguageException::emptyValue();
        }

        if (strlen($value) > self::MAX_LENGTH) {
            throw LanguageException::invalidLength();
        }
    }
}
