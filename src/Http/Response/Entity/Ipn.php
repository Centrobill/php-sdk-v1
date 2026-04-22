<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Http\Response\Entity;

use stdClass;

final class Ipn
{
    private stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function getUrl(): ?string
    {
        return $this->data->url ?? null;
    }

    public function getRequest(): ?string
    {
        return $this->data->request ?? null;
    }

    public function getResponse(): ?string
    {
        return $this->data->response ?? null;
    }

    public function getOrderId(): ?string
    {
        return $this->data->orderId ?? null;
    }

    public function getTransactionId(): ?string
    {
        return $this->data->transactionId ?? null;
    }

    public function getExecTime(): ?string
    {
        return $this->data->execTime ?? null;
    }

    public function getHttpCode(): ?string
    {
        return $this->data->httpCode ?? null;
    }

    public function getError(): ?string
    {
        return $this->data->error ?? null;
    }

    public function getAttemptNumber(): ?int
    {
        return $this->data->attemptNumber ?? null;
    }
}
