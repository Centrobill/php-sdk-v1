<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Utils\Utils;

class ErrorResponse extends AbstractResponse
{
    public function getMessage(): string
    {
        return $this->data->message;
    }

    public function getErrors(): array
    {
        return Utils::convertObjectToArray($this->data->errors);
    }
}
