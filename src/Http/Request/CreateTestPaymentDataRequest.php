<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Balance;
use Centrobill\Sdk\ValueObject\Emulate3ds;
use Centrobill\Sdk\ValueObject\Type;

class CreateTestPaymentDataRequest implements RequestInterface
{
    /**
     * @var Type $type
     */
    private Type $type;

    /**
     * @var Emulate3ds $emulate3ds
     */
    private Emulate3ds $emulate3ds;

    /**
     * @var Balance $balance
     */
    private Balance $balance;

    /**
     * @var array $allowedIps
     */
    private $allowedIps;

    public function __construct(Type $type, $allowedIps = [], Emulate3ds $emulate3ds = null, Balance $balance = null)
    {
        $this->type = $type;
        $this->allowedIps = $allowedIps;
        $this->emulate3ds = $emulate3ds;
        $this->balance = $balance;
    }

    public function setAllowedIps($allowedIps)
    {
        $this->allowedIps = $allowedIps;
        return $this;
    }

    public function setEmulate3ds(Emulate3ds $emulate3ds)
    {
        $this->emulate3ds = $emulate3ds;
        return $this;
    }

    public function setBalance(Balance $balance)
    {
        $this->balance = $balance;
        return $this;
    }

    public function getPayload()
    {
        $data = [
            'type' => (string)$this->type,
        ];

        if ($this->allowedIps !== null) {
            $data['allowedIps'] = $this->allowedIps;
        }

        if ($this->emulate3ds !== null) {
            $data['emulate3ds'] = (string)$this->emulate3ds;
        }

        if ($this->balance !== null) {
            $data['balance'] = (string)$this->balance;
        }

        return $data;
    }

    public function getUri()
    {
        return 'testPaymentData';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_POST;
    }
}
