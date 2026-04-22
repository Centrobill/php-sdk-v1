<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Exception;

use Exception;

class GenerateUrlToPaymentPageRequestException extends Exception implements SDKExceptionInterface
{
    public static function invalidValue(): self
    {
        return new self('consumer.ip is required when payment.selected or payment.method are not empty');
    }
}
