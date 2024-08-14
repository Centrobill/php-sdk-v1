<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class SkuException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): SkuException
    {
        return new self('Sku should not be empty.');
    }
}
