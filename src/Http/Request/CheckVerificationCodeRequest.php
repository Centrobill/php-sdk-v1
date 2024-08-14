<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Code;
use Centrobill\Sdk\ValueObject\Phone;

class CheckVerificationCodeRequest implements RequestInterface
{
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
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }

    public function getPayload(): array
    {
        return [];
    }
}
