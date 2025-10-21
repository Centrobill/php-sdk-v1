<?php

declare(strict_types=1);

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\DirectoryServerTransactionIdException;
use Centrobill\Sdk\ValueObject\Traits\ValueToStringTrait;

final class DirectoryServerTransactionId
{
    use ValueToStringTrait;

    protected function checkValue($value)
    {
        if (empty($value)) {
            throw DirectoryServerTransactionIdException::emptyValue();
        }
    }
}
