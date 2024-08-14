<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BrowserColorDepthException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;

final class BrowserColorDepth
{
    /**
     * @var int
     */
    private int $value;

    /**
     * @throws SDKExceptionInterface
     */
    public function __construct($value)
    {
        if (empty($value)) {
            throw BrowserColorDepthException::emptyValue();
        }

        if (filter_var($value, FILTER_VALIDATE_INT) === false || (int)$value < 0) {
            throw BrowserColorDepthException::invalidValue();
        }

        $this->value = (int)$value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }
}
