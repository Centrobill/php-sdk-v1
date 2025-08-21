<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class GeoFeeException extends Exception implements SDKExceptionInterface
{
    public static function emptyItems()
    {
        return new self('GeoFee items cannot be empty.');
    }
}
