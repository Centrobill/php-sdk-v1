<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Code;
use Centrobill\Sdk\ValueObject\Phone;

class CheckVerificationCodeRequest implements RequestInterface
{
    use HasRequestId;

    /**
     * @var Phone $phone
     */
    private Phone $phone;

    /**
     * @var Code $code
     */
    private Code $code;

    public function __construct(Phone $phone, Code $code)
    {
        $this->phone = $phone;
        $this->code = $code;
    }

    public function getUri(): string
    {
        return sprintf('antifraud/verification/%s/%s', $this->phone, $this->code);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }

    public function getHeaders(): array
    {
        if ($this->getRequestId() !== null) {
            return [
                'X-Request-Id' => $this->getRequestId(),
            ];
        }

        return [];
    }

    public function getPayload(): array
    {
        return [];
    }
}
