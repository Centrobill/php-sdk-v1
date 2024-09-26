<?php

namespace Centrobill\Sdk\Service;

use Centrobill\Sdk\ValueObject\ApiKey;

interface SignatureCalculatorInterface
{
    public function calculate(string $apiKey, string $transactionId, string $status): string;
}
