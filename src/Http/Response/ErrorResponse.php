<?php

namespace Centrobill\Sdk\Http\Response;

class ErrorResponse extends AbstractResponse
{
    public function getMessage(): string
    {
        return $this->data->message;
    }

    public function getErrors(): array
    {
        return $this->data->errors;
    }
}
