<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\DocumentIdException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class DocumentId
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 50;

    protected function checkValue(string $value): void
    {
        if (empty($value)) {
            throw DocumentIdException::emptyValue();
        }

        if (strlen($value) > self::MAX_LENGTH) {
            throw DocumentIdException::invalidLength();
        }
    }
}
