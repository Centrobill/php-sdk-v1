<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class threedsException extends Exception
{
    public static function emptyValue()
    {
        return new self('Threeds should not be empty.');
    }
}
