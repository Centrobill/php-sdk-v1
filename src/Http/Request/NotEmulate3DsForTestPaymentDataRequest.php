<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;

class NotEmulate3DsForTestPaymentDataRequest implements RequestInterface
{
    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var bool|null $emulate3ds
     */
    private $emulate3ds;

    public function __construct(Id $id, $emulate3ds = null)
    {
        $this->id = $id;
        $this->emulate3ds = $emulate3ds;
    }

    public function setEmulate3ds($emulate3ds): NotEmulate3DsForTestPaymentDataRequest
    {
        $this->emulate3ds = $emulate3ds;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [];

        if ($this->emulate3ds !== null) {
            $data['emulate3ds'] = $this->emulate3ds;
        }

        return $data;
    }

    public function getUri(): string
    {
        return sprintf('testPaymentData/%s/notEmulate3ds', $this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        return [];
    }
}
