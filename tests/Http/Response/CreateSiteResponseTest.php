<?php

namespace Tests\Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\CreateSiteResponse;
use Centrobill\Sdk\Http\Response\Entity\Site;
use Centrobill\Sdk\Utils\Utils;
use PHPUnit\Framework\TestCase;

class CreateSiteResponseTest extends TestCase
{
    public function testGetters()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../fixtures/CreateSiteResponse.json'));
        $response = new CreateSiteResponse($data);

        self::assertEquals(Utils::convertObjectToArray($data), $response->getData());
        self::assertInstanceOf(Site::class, $response->getSite());
    }
}
