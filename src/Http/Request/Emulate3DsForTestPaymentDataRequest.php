<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\ApiKey;
use Centrobill\Sdk\ValueObject\Id;

class Emulate3DsForTestPaymentDataRequest implements RequestInterface
{
    /**
     * @var ApiKey $apiKey
     */
    private ApiKey $apiKey;

    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var bool $emulate3ds
     */
    private $emulate3ds;

    public function __construct(ApiKey $apiKey, Id $id, $emulate3ds = false)
    {
        $this->apiKey = $apiKey;
        $this->id = $id;
        $this->emulate3ds = $emulate3ds;
    }

    public function setEmulate3ds($emulate3ds)
    {
        $this->emulate3ds = $emulate3ds;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [
            'emulate3ds' => $this->emulate3ds,
        ];

        return $data;
    }

    public function getUri(): string
    {
        return sprintf('testPaymentData/%s/emulate3ds', (string)$this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
            'Authorization' => (string)$this->apiKey,
        ];
    }
}
