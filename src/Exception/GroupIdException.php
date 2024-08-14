<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\GroupId;
use Exception;

class GroupIdException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): GroupIdException
    {
        return new self('Group id should not be empty.');
    }

    public static function invalidValue(): GroupIdException
    {
        return new self(
            sprintf(
                'Group id should be one of these values: [%s].',
                implode(', ', GroupId::toArray())
            )
        );
    }
}
