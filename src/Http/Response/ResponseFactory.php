<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Request\RequestInterface;
use Psr\Http\Message\ResponseInterface as GuzzleResponseInterface;

class ResponseFactory extends AbstractResponse
{
    public function createResponse(
        RequestInterface $request,
        GuzzleResponseInterface $response
    ): ResponseInterface {
        if ($response->getStatusCode() == 200) {
            $responseClassName = $this->getResponseClassName($request);
            return new $responseClassName($response->getBody()->getContents());
        }

        if ($response->getStatusCode() == 204) {
            return new EmptyResponse();
        }
    }

    private function getResponseClassName(RequestInterface $request)
    {
        $className = get_class($request);
        $className = str_replace('Request', 'Response', $className);

        return $className;
    }
}