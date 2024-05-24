<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\TestPaymentData;

class Emulate3DsForTestPaymentDataResponse extends AbstractResponse implements ResponseInterface
{
    public function getTestPaymentData(): TestPaymentData
    {
        return new TestPaymentData($this->data);
    }
}
