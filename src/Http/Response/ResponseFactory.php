<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Request\ApiRequestInterface;
use GuzzleHttp\Psr7\Response as GuzzleResponseInterface;
use GuzzleHttp\Utils;

class ResponseFactory
{
    public static function createResponse(
        ApiRequestInterface $request,
        GuzzleResponseInterface $response
    ): ResponseInterface {
        $content = Utils::jsonDecode($response->getBody()->getContents());

        if ($response->getStatusCode() >= 400 && $response->getStatusCode() < 500) {
            return new ClientErrorResponse($content);
        }

        if ($response->getStatusCode() >= 500) {
            return new ErrorResponse($content);
        }

        $responseClassName = self::getResponseClassName($request);
        return new $responseClassName($content);
    }

    private function getResponseClassName(ApiRequestInterface $request): string
    {
        return str_replace('Request', 'Response', get_class($request));
    }
}
