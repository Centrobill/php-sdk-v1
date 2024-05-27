<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Consumer;

class CreateConsumerResponse extends AbstractResponse implements ResponseInterface
{
    public function getConsumer(): Consumer
    {
        return new Consumer($this->data);
    }
}
