<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Phone;

class GetAvailableChannelsOfCodeVerificationRequest implements RequestInterface
{
    use HasRequestId;

    /**
     * @var Phone $phone
     */
    private Phone $phone;

    public function __construct(Phone $phone)
    {
        $this->phone = $phone;
    }

    public function getUri(): string
    {
        return sprintf('antifraud/verification/%s', $this->phone);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }

    public function getHeaders(): array
    {
        if ($this->getRequestId() !== null) {
            return [
                'X-Request-ID' => $this->getRequestId(),
            ];
        }

        return [];
    }

    public function getPayload(): array
    {
        return [];
    }
}
