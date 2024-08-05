<?php

namespace Centrobill\Sdk\Http\Response\Traits;

trait HasMetadata
{
    public function getMetadata(): array
    {
        return (array)$this->data->metadata;
    }
}
