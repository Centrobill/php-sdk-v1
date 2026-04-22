<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\ValueObject\ScaExemption;
use Exception;

class ScaExemptionException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue(): self
    {
        return new self('Sca exemption should not be empty.');
    }

    public static function invalidValue(): self
    {
        return new self(
            sprintf(
                'Sca exemption should be one of these values: [%s].',
                implode(', ', ScaExemption::toArray())
            )
        );
    }
}
