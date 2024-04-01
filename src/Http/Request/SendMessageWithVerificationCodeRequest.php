<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Channel;
use Centrobill\Sdk\ValueObject\From;
use Centrobill\Sdk\ValueObject\Phone;

class SendMessageWithVerificationCodeRequest implements RequestInterface
{
    /**
     * @var Channel $channel
     */
    private Channel $channel;

    /**
     * @var Phone $phone
     */
    private Phone $phone;

    /**
     * @var ?From $from
     */
    private ?From $from;

    public function __construct(Channel $channel, Phone $phone, ?From $from = null)
    {
        $this->channel = $channel;
        $this->phone = $phone;
        $this->from = $from;
    }

    public function setFrom(From $from)
    {
        $this->from = $from;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [
            'phone' => (string)$this->phone,
        ];

        if ($this->from !== null) {
            $data['from'] = (string)$this->from;
        }

        return $data;
    }

    public function getUri(): string
    {
        return sprintf('antifraud/verification/%s/send', (string)$this->channel);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }
}
