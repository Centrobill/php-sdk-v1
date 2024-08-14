<?php

namespace Centrobill\Sdk\Exception;

use Exception;

class ChannelException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): ChannelException
    {
        return new self('Channel should not be empty.');
    }
}
