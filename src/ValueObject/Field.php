<?php

namespace Centrobill\Sdk\ValueObject;

final class Field
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $value;

    public function __construct($key, $value)
    {
        if (is_string($value)) {
            $value = trim(filter_var($value, FILTER_UNSAFE_RAW));
        }

        if (is_string($key)) {
            $key = trim(filter_var($key, FILTER_UNSAFE_RAW));
        }

        $this->value = $value;
        $this->key = $key;
    }
    
    public function getKey()
    {
        return $this->key;
    }

    public function getValue()
    {
        return $this->value;
    }
}
