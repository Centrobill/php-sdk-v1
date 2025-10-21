<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class RepeatException extends Exception implements SDKExceptionInterface
{
    public static function invalidType(): RepeatException
    {
        return new self('Repeat should be of type boolean or integer.');
    }
}
