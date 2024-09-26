<?php

namespace Centrobill\Sdk\Service;

class SignatureCalculator implements SignatureCalculatorInterface
{
    private const ALGO = 'sha256';

    public function calculate(string $apiKey, string $transactionId, string $status): string
    {
        return hash(
            self::ALGO,
            implode([
                $apiKey,
                $transactionId,
                $status,
            ])
        );
    }
}
