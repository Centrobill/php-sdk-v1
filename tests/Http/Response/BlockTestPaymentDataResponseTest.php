<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\BlockTestPaymentDataResponse;
use PHPUnit\Framework\TestCase;

class BlockTestPaymentDataResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/BlockTestPaymentDataResponse.json'));
        $response = new BlockTestPaymentDataResponse($data);

        self::assertEquals((array)$data, $response->getData());
        self::assertEquals($data->id, $response->getId());
        self::assertEquals($data->type, $response->getType());
        self::assertEquals($data->emulate3ds, $response->emulate3ds());
        self::assertEquals($data->number, $response->getNumber());
        self::assertEquals($data->balance, $response->getBalance());
        self::assertEquals($data->blocked, $response->isBlocked());
        self::assertEquals($data->allowedIps, $response->getAllowedIps());
    }
}
