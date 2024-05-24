<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\GetListOfExternalIpsResponse;
use PHPUnit\Framework\TestCase;

class GetListOfExternalIpsResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/GetListOfExternalIpsResponse.json'));
        $response = new GetListOfExternalIpsResponse($data);

        self::assertTrue($response->isSuccessful());
        self::assertEquals($data, $response->getData());
    }
}
