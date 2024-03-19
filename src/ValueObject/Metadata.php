<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\MetadataException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class Metadata
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw MetadataException::emptyValue();
        }
    }
}
