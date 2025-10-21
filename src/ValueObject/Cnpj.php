<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\CnpjException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class Cnpj
{
    use ValueToStringTrait;

    public const MAX_LENGTH = 14;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value): void
    {
        if (empty($value)) {
            throw CnpjException::emptyValue();
        }

        if (strlen($value) !== self::MAX_LENGTH) {
            throw CnpjException::invalidLength();
        }
    }
}
