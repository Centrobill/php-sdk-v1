<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Amount;
use Centrobill\Sdk\ValueObject\Currency;
use Centrobill\Sdk\ValueObject\Ip;
use Centrobill\Sdk\ValueObject\TestPaymentDataType;

class CreateTestPaymentDataRequest implements RequestInterface
{
    /**
     * @var TestPaymentDataType $type
     */
    private TestPaymentDataType $type;

    /**
     * @var bool|null $emulate3ds
     */
    private $emulate3ds;

    /**
     * @var ?Amount $balance
     */
    private ?Amount $balance;

    /**
     * @var ?Currency $currency
     */
    private ?Currency $currency;

    /**
     * @var Array<Ip> $allowedIps
     */
    private $allowedIps;

    public function __construct(
        TestPaymentDataType $type,
        $allowedIps = [],
        $emulate3ds = null,
        ?Amount $balance = null,
        ?Currency $currency = null
    ) {
        $this->type = $type;
        $this->allowedIps = $allowedIps;
        $this->emulate3ds = $emulate3ds;
        $this->balance = $balance;
        $this->currency = $currency;
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

    public function setBalance(Amount $balance)
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
            $data['balance'] = $this->balance->getValue();
        }

        if ($this->currency !== null) {
            $data['currency'] = (string)$this->currency;
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
