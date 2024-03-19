<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Emulate3ds;

class NotEmulate3DsForTestPaymentDataRequest implements RequestInterface
{
    /**
     * @var Emulate3ds $emulate3ds
     */
    private Emulate3ds $emulate3ds;

    public function __construct(Emulate3ds $emulate3ds = null)
    {
        $this->emulate3ds = $emulate3ds;
    }

    public function setEmulate3ds(Emulate3ds $emulate3ds)
    {
        $this->emulate3ds = $emulate3ds;
        return $this;
    }

    public function getPayload()
    {
        $data = [];

        if ($this->emulate3ds !== null) {
            $data['emulate3ds'] = (string)$this->emulate3ds;
        }

        return $data;
    }

    public function getUri()
    {
        return '/testPaymentData/{id}/notEmulate3ds';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
