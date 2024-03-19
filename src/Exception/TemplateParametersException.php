<?php

namespace Centrobill\Sdk\Exception;

use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;

class TemplateParametersException extends Exception implements SDKExceptionInterface
{
    public static function emptyValue()
    {
        return new self('Template parameters should not be empty.');
    }
}
