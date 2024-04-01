<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Sku\SkuType;
use Exception;

class SkuTypeException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Sku type should not be empty.');
    }

    public static function invalidValue()
    {
        return new self(
            sprintf(
                'Source type should be one of these values: [%s].',
                implode(', ', SkuType::toArray())
            )
        );
    }

}