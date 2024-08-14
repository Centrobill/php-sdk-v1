<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class SkuEntityException extends Exception implements SDKExceptionInterface
{
    public static function siteIdNameEmpty(): SkuEntityException
    {
        return new self('Site id or Name are required.');
    }
}
