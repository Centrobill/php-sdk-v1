<?php

namespace Centrobill\Sdk\ValueObject\Traits;

trait ValueToStringTrait
{
    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        $this->checkValue($value);

        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->value;
    }

    /**
     * @codeCoverageIgnore
     * @param mixed $value
     */
    protected function checkValue(string $value)
    {
    }
}
