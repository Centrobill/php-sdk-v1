<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\TestPaymentData;

class GetTestPaymentDataByIdResponse extends AbstractResponse implements ResponseInterface
{
    public function getTestPaymentData(): TestPaymentData
    {
        return new TestPaymentData($this->data);
    }
}
