<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Consumer;

class GetConsumerResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }

    public function getConsumer(): Consumer
    {
        return new Consumer($this->data);
    }
}
