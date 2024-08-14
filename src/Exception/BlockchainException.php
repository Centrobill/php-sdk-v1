<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\Blockchain;
use Exception;

class BlockchainException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): BlockchainException
    {
        return new self('Blockchain should not be empty.');
    }

    public static function invalidValue(): BlockchainException
    {
        return new self(
            sprintf(
                'Blockchain should be one of these values: [%s].',
                implode(', ', Blockchain::toArray())
            )
        );
    }
}
