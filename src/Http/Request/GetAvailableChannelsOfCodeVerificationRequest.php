<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Phone;

class GetAvailableChannelsOfCodeVerificationRequest implements RequestInterface
{
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
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }

    public function getPayload(): array
    {
        return [];
    }
}
