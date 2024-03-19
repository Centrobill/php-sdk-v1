<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class AllowedIpsException extends Exception
{
    public static function emptyValue()
    {
        return new self('Allowed ips should not be empty.');
    }
}
