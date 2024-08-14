<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BrowserScreenHeightException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;

final class BrowserScreenHeight
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
            throw BrowserScreenHeightException::emptyValue();
        }

        if (filter_var($value, FILTER_VALIDATE_INT) === false || (int)$value < 0) {
            throw BrowserScreenHeightException::invalidValue();
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
