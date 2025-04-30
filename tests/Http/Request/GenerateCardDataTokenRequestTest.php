<?php

namespace Tests\Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\Exception\CardException;
use Centrobill\Sdk\Http\Request\GenerateCardDataTokenRequest;
use Centrobill\Sdk\ValueObject\CardHolder;
use Centrobill\Sdk\ValueObject\Cvv;
use Centrobill\Sdk\ValueObject\ExpirationMonth;
use Centrobill\Sdk\ValueObject\ExpirationYear;
use Centrobill\Sdk\ValueObject\Number;
use Centrobill\Sdk\ValueObject\Zip;
use PHPUnit\Framework\TestCase;

class GenerateCardDataTokenRequestTest extends TestCase
{
    private GenerateCardDataTokenRequest $request;

    public function testGetters()
    {
        $this->createValidRequest();
        $this->assertInstanceOf(GenerateCardDataTokenRequest::class, $this->request);
        $this->assertEquals('tokenize', $this->request->getUri());
        $this->assertEquals('POST', $this->request->getHttpMethod());
        $this->assertEquals([
            'number' => '4111111111111111',
            'expirationYear' => (string)(date('y')),
            'expirationMonth' => (string)(date('m')),
            'cvv' => '123',
            'cardHolder' => 'John Doe',
            'zip' => '12345',
        ], $this->request->getPayload());
        $this->assertEquals([
            'X-Requested-With' => 'XMLHttpRequest',
        ], $this->request->getHeaders());
    }

    public function testExpiredCard()
    {
        $this->expectException(CardException::class);
        $this->request = new GenerateCardDataTokenRequest(
            new Number('4111111111111111'),
            new ExpirationYear(date('y')),
            new ExpirationMonth(date('m', strtotime('-1 month'))),
            new Cvv('123'),
            new CardHolder('John Doe'),
            new Zip('12345'),
        );
    }

    private function createValidRequest()
    {
        $this->request = new GenerateCardDataTokenRequest(
            new Number('4111111111111111'),
            new ExpirationYear(date('y')),
            new ExpirationMonth(date('m')),
            new Cvv('123'),
            new CardHolder('John Doe'),
            new Zip('12345'),
        );
    }
}
