<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Request\RequestInterface;
use GuzzleHttp\Psr7\Response as GuzzleResponseInterface;

class ResponseFactory
{
    public static function createResponse(
        RequestInterface $request,
        GuzzleResponseInterface $response
    ): ResponseInterface {
        if ($response->getStatusCode() >= 400 && $response->getStatusCode() <= 500) {
            return new ErrorResponse(json_decode($response->getBody()->getContents()));
        }

        $responseClassName = self::getResponseClassName($request);
        return new $responseClassName(json_decode($response->getBody()->getContents()));
    }

    private function getResponseClassName(RequestInterface $request)
    {
        $className = get_class($request);
        $className = str_replace('Request', 'Response', $className);

        return $className;
    }
}