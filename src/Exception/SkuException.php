<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class SkuException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Sku should not be empty.');
    }
}
