<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\BrowserScreenWidthException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;

final class BrowserScreenWidth
{
    /**
     * @var int
     */
    private $value;

    /**
     * @throws SDKExceptionInterface
     */
    public function __construct($value)
    {
        if (empty($value)) {
            throw BrowserScreenWidthException::emptyValue();
        }
        
        if (filter_var($value, FILTER_VALIDATE_INT) === false || (int)$value < 0) {
            throw BrowserScreenWidthException::invalidValue();
        }

        $this->value = (int)$value;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }
}
