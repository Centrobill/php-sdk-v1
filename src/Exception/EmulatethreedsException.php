<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class EmulatethreedsException extends Exception
{
    public static function emptyValue()
    {
        return new self('Emulatethreeds should not be empty.');
    }
}
