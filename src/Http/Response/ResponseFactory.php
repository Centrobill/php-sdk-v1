<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Request\RequestInterface;
use Exception;
use GuzzleHttp\Psr7\Response as GuzzleResponseInterface;
use GuzzleHttp\Utils;

class ResponseFactory
{
    public static function createResponse(
        RequestInterface $request,
        GuzzleResponseInterface $response
    ): ResponseInterface {
        try {
            $content = Utils::jsonDecode($response->getBody()->getContents());
        } catch (Exception $e) {
            $content = '';
        }

        if ($response->getStatusCode() >= 400 && $response->getStatusCode() < 500) {
            return new ClientErrorResponse($content);
        }

        if ($response->getStatusCode() >= 500) {
            return new ErrorResponse($content);
        }

        $responseClassName = str_replace('Request', 'Response', get_class($request));
        return new $responseClassName($content);
    }
}
