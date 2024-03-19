<?php

namespace Centrobill\Sdk\ValueObject\Trait;


trait ValueToStringTrait
{
    /**
     * @param string $value
     */
    public function __construct(private mixed $value)
    {
        if (is_string($value)) {
            $value = trim(filter_var($value, FILTER_UNSAFE_RAW));
        }

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
    protected function checkValue(mixed $value)
    {
    }
}
