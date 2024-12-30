<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\TokenException;

final class ApplePayPayload
{
    private array $payload;

    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }

    public static function fromToken(string $token): ApplePayPayload
    {
        return new self(json_decode($token, true));
    }

    /**
     * @throws TokenException
     */
    protected function checkValue($value)
    {
        if (empty($value)) {
            throw TokenException::emptyValue();
        }
    }

    public function getPayload(): array
    {
        return $this->payload;
    }
}
