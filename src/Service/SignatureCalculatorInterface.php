<?php

namespace Centrobill\Sdk\Service;

interface SignatureCalculatorInterface
{
    public function calculate(string $apiKey, string $transactionId, string $status): string;
}
