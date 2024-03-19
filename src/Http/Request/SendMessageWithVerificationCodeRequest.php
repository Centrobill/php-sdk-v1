<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\From;
use Centrobill\Sdk\ValueObject\Phone;

class SendMessageWithVerificationCodeRequest implements RequestInterface
{
    /**
     * @var Phone $phone
     */
    private Phone $phone;

    /**
     * @var From $from
     */
    private From $from;

    public function __construct(Phone $phone, From $from = null)
    {
        $this->phone = $phone;
        $this->from = $from;
    }

    public function setFrom(From $from)
    {
        $this->from = $from;
        return $this;
    }

    public function getPayload()
    {
        $data = [
            'phone' => (string)$this->phone,
        ];

        if ($this->from !== null) {
            $data['from'] = (string)$this->from;
        }

        return $data;
    }

    public function getUri()
    {
        return '/antifraud/verification/{channel}/send';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
