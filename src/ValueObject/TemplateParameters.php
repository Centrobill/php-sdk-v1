<?php

namespace Centrobill\Sdk\ValueObject;

use Centrobill\Sdk\Exception\TemplateParametersException;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Centrobill\Sdk\ValueObject\Trait\ValueToStringTrait;

final class TemplateParameters
{
    use ValueToStringTrait;

    /**
     * @throws SDKExceptionInterface
     */
    function checkValue($value)

    {
        if (empty($value)) {
            throw TemplateParametersException::emptyValue();
        }
    }
}
