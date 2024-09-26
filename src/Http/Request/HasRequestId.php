<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\RequestId;

trait HasRequestId
{
    private ?RequestId $requestId = null;

    public function getRequestId(): ?string
    {
        return $this->requestId ? (string)$this->requestId : null;
    }

    public function setRequestId(RequestId $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }
}
