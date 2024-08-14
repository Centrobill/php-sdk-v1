<?php

namespace Centrobill\Sdk\ValueObject\Traits;

use Centrobill\Sdk\Exception\SDKExceptionInterface;

trait ValueToStringTrait
{
    private string $value;

    /**
     * @throws SDKExceptionInterface
     */
    public function __construct(string $value)
    {
        $this->checkValue($value);

        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->value;
    }

    /**
     * @codeCoverageIgnore
     * @param mixed $value
     */
    protected function checkValue(string $value): void
    {
    }
}
