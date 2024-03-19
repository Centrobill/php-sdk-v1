<?php

namespace Centrobill\Sdk\Http\Request;

class DeleteTestPaymentDataByIDRequest implements RequestInterface
{
    public function getUri()
    {
        return '/testPaymentData/{id}';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_DELETE;
    }
}
