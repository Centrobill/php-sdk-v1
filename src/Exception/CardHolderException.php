<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class CardHolderException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Card holder should not be empty.');
    }

    public static function invalidLength()
    {
        return new self('Card holder should be between 1 and 64 characters long.');
    }
}
