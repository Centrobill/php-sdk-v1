<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\TestPaymentData;

class GetListOfTestPaymentDataResponse extends AbstractResponse implements ResponseInterface
{
    /**
     * @return TestPaymentData[]
     */
    public function getList(): array
    {
        return array_map(function ($testPaymentData) {
            return new TestPaymentData($testPaymentData);
        }, $this->data->data);
    }

    public function getTotal()
    {
        return $this->data->meta->total;
    }

    public function getOffset()
    {
        return $this->data->meta->offset;
    }

    public function getLimit()
    {
        return $this->data->meta->limit;
    }
}
