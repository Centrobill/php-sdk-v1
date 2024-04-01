<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Balance;
use Centrobill\Sdk\ValueObject\Ip;
use Centrobill\Sdk\ValueObject\PaymentSourceType;
use Centrobill\Sdk\ValueObject\Type;

class CreateTestPaymentDataRequest implements RequestInterface
{
    /**
     * @var PaymentSourceType $type
     */
    private PaymentSourceType $type;

    /**
     * @var bool $emulate3ds
     */
    private $emulate3ds;

    /**
     * @var Balance $balance
     */
    private Balance $balance;

    /**
     * @var Array<Ip> $allowedIps
     */
    private $allowedIps;

    public function __construct(PaymentSourceType $type, $allowedIps = [], $emulate3ds = false, Balance $balance = null)
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

    public function setEmulate3ds(bool $emulate3ds)
    {
        $this->emulate3ds = $emulate3ds;
        return $this;
    }

    public function setBalance(Balance $balance)
    {
        $this->balance = $balance;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [
            'type' => (string)$this->type,
        ];

        if (!empty($this->allowedIps)) {
            $data['allowedIps'] = array_map(function (Ip $ip) {
                return (string)$ip;
            }, $this->allowedIps);
        }

        if ($this->emulate3ds !== null) {
            $data['emulate3ds'] = $this->emulate3ds;
        }

        if ($this->balance !== null) {
            $data['balance'] = (string)$this->balance;
        }

        return $data;
    }

    public function getUri(): string
    {
        return 'testPaymentData';
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
