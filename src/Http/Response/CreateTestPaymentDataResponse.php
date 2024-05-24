<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\TestPaymentData;

class CreateTestPaymentDataResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }

    public function getTestPaymentData(): TestPaymentData
    {
        return new TestPaymentData($this->data);
    }
}
