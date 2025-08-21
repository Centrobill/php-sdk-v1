<?php

declare(strict_types=1);

namespace Tests\Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\Fee;
use Centrobill\Sdk\Entity\FeeItem;
use Centrobill\Sdk\Entity\GeoFee;
use Centrobill\Sdk\Exception\FeeException;
use Centrobill\Sdk\ValueObject\Fees\Type;
use Centrobill\Sdk\ValueObject\Fees\Value;
use PHPUnit\Framework\TestCase;

class FeeTest extends TestCase
{
    private Fee $entity;

    public function testToArray()
    {
        $this->entity = new Fee(
            new Type('platform'),
            [
                new GeoFee([
                    new FeeItem(new Value(0.1)),
                ]),
            ]
        );

        self::assertEquals(
            [
                'type' => 'platform',
                'items' => [
                    [
                        'geo' => 'ALL',
                        'items' => [
                            [
                                'paymentMethod' => 'ALL',
                                'value' => 0.1,
                            ],
                        ],
                    ],
                ],
            ],
            $this->entity->toArray()
        );
    }

    public function testExceptionEmptyItems()
    {
        $this->expectException(FeeException::class);
        $this->expectExceptionMessage('Fee items should not be empty.');

        $this->entity = new Fee(new Type('platform'));
        $this->entity->toArray();
    }
}
