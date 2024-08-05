<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\CancelSubscriptionResponse;
use Centrobill\Sdk\Http\Response\Entity\Subscription;
use PHPUnit\Framework\TestCase;

class CancelSubscriptionResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/CancelSubscriptionResponse.json'));
        $response = new CancelSubscriptionResponse($data);

        self::assertEquals((array)$data, $response->getData());
        self::assertInstanceOf(Subscription::class, $response->getSubscription());
    }
}
