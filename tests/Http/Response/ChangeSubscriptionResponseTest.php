<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\ChangeSubscriptionResponse;
use Centrobill\Sdk\Http\Response\Entity\Subscription;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class ChangeSubscriptionResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/ChangeSubscriptionResponse.json'));
        $response = new ChangeSubscriptionResponse($data);

        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::assertInstanceOf(Subscription::class, $response->getSubscription());
    }
}
