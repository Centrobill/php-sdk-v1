<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\CancelSubscriptionResponse;
use PHPUnit\Framework\TestCase;

class CancelSubscriptionResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/CancelSubscriptionResponse.json'));
        $response = new CancelSubscriptionResponse($data);

        self::assertEquals((array)$data, $response->getData());
        self::assertEquals($data->id, $response->getId());
        self::assertEquals($data->status, $response->getStatus());
        self::assertEquals($data->cycle, $response->getCycle());
        self::assertEquals($data->skuName, $response->getSkuName());
        self::assertEquals($data->siteId, $response->getSiteId());
        self::assertEquals($data->renewalDate, $response->getRenewalDate());
        self::assertEquals($data->cancelDate, $response->getCancelDate());
        self::assertEquals($data->consumerId, $response->getConsumerId());
    }
}
