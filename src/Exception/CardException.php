<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class CardException extends Exception implements SDKExceptionInterface
{
    public static function expired(): CardException
    {
        return new self('Card is expired.');
    }
}
