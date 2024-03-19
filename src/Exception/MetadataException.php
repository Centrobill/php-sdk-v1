<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class MetadataException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Metadata should not be empty.');
    }
}
