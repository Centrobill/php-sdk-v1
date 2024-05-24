<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\ChangePaymentAccountForsubscriptionResponse;
use Centrobill\Sdk\Http\Response\Entity\Consumer;
use Centrobill\Sdk\Http\Response\Entity\Payment;
use Centrobill\Sdk\Http\Response\Entity\Subscription;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class ChangePaymentAccountForsubscriptionResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/ChangePaymentAccountForsubscriptionResponse.json'));
        $response = new ChangePaymentAccountForsubscriptionResponse($data);

        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::assertInstanceOf(Payment::class, $response->getPayment());
        self::assertInstanceOf(Consumer::class, $response->getConsumer());
        self::assertInstanceOf(Subscription::class, $response->getSubscription());
        self::assertEquals((array)$data->metadata, $response->getMetadata());
    }
}
