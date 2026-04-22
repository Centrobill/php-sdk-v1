<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\ClientIdException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

class ClientId
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    protected function checkValue($value): void
    {
        if (empty($value)) {
            throw ClientIdException::emptyValue();
        }
    }
}
