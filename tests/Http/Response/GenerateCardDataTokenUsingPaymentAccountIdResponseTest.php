<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\GenerateCardDataTokenUsingPaymentAccountIdResponse;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class GenerateCardDataTokenUsingPaymentAccountIdResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/GenerateCardDataTokenUsingPaymentAccountIdResponse.json'));
        $response = new GenerateCardDataTokenUsingPaymentAccountIdResponse($data);

        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::assertEquals($data->token, $response->getToken());
        self::assertEquals($data->expireAt, $response->getExpireAt());
    }
}
