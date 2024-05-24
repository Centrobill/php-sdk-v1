<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class ChannelException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Channel should not be empty.');
    }
}
