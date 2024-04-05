<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Site;
use Centrobill\Sdk\Http\Response\UpdateSiteResponse;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class UpdateSiteResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/UpdateSiteResponse.json'));
        $response = new UpdateSiteResponse($data);

        self::assertTrue($response->isSuccessful());
        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::isInstanceOf($response->getSite(), Site::class);
    }
}
