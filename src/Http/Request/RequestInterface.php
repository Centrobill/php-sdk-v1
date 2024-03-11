<?php

namespace Centrobill\Sdk\Http\Request;

interface RequestInterface
{
    const HTTP_METHOD_GET = 'GET';
    const HTTP_METHOD_POST = 'POST';
    const HTTP_METHOD_PUT = 'PUT';
    const HTTP_METHOD_PATCH = 'PATCH';
    const HTTP_METHOD_DELETE = 'DELETE';

    /**
     * Get request data
     *
     * @return array
     */
    public function getPayload();

    /**
     * Get the uri
     *
     * @return string
     */
    public function getUri();

    /**
     * Get HTTP method
     *
     * @return string
     */
    public function getHttpMethod();
}