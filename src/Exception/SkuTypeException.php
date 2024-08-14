<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\Sku\SkuType;
use Exception;

class SkuTypeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): SkuTypeException
    {
        return new self('Sku type should not be empty.');
    }

    public static function invalidValue(): SkuTypeException
    {
        return new self(
            sprintf(
                'Source type should be one of these values: [%s].',
                implode(', ', SkuType::toArray())
            )
        );
    }
}
