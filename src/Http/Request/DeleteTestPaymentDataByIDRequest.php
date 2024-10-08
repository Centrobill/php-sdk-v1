<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;

class DeleteTestPaymentDataByIDRequest implements RequestInterface
{
    /**
     * @var Id $id
     */
    private Id $id;

    public function __construct(Id $id)
    {
        $this->id = $id;
    }

    public function getUri(): string
    {
        return sprintf('testPaymentData/%s', $this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_DELETE;
    }

    /**
     * Get headers
     *
     * @return array
     */
    public function getHeaders(): array
    {
        return [];
    }

    /**
     * Get request data
     *
     * @return array
     */
    public function getPayload(): array
    {
        return [];
    }
}
