<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Limit;
use Centrobill\Sdk\ValueObject\TestPaymentDataType;

class GetListOfTestPaymentDataRequest implements RequestInterface
{
    use HasRequestId;

    /**
     * @var ?Limit $limit
     */
    private ?Limit $limit;

    /**
     * @var ?TestPaymentDataType $testPaymentDataType
     */
    private ?TestPaymentDataType $testPaymentDataType;

    public function __construct(
        ?Limit $limit = null,
        ?TestPaymentDataType $testPaymentDataType = null
    ) {
        $this->limit = $limit;
        $this->testPaymentDataType = $testPaymentDataType;
    }

    public function getPayload(): array
    {
        $data = [];

        if ($this->limit !== null) {
            $data['limit'] = $this->limit->getValue();
        }

        if ($this->testPaymentDataType !== null) {
            $data['type'] = (string)$this->testPaymentDataType;
        }

        return $data;
    }

    public function getUri(): string
    {
        return 'testPaymentData';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }

    public function getHeaders(): array
    {
        if ($this->getRequestId() !== null) {
            return [
                'X-Request-ID' => $this->getRequestId(),
            ];
        }

        return [];
    }
}
