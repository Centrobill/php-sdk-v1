<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;

class NotEmulate3DsForTestPaymentDataRequest implements RequestInterface
{
    /**
     * @var Id $id
     */
    private $id;
    
    /**
     * @var bool $emulate3ds
     */
    private $emulate3ds;

    public function __construct($emulate3ds = null)
    {
        $this->emulate3ds = $emulate3ds;
    }

    public function setEmulate3ds(Id $id, $emulate3ds)
    {
        $this->id = $id;
        $this->emulate3ds = $emulate3ds;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [];

        if ($this->emulate3ds !== null) {
            $data['emulate3ds'] = (string)$this->emulate3ds;
        }

        return $data;
    }

    public function getUri(): string
    {
        return sprintf('testPaymentData/%s/notEmulate3ds', (string)$this->id);
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
