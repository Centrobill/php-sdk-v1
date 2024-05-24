<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\GenerateCardDataTokenResponse;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class GenerateCardDataTokenResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/GenerateCardDataTokenResponse.json'));
        $response = new GenerateCardDataTokenResponse($data);

        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::assertEquals($data->token, $response->getToken());
        self::assertEquals($data->expiredAt, $response->getExpiredAt());
    }
}
