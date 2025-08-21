<?php

declare(strict_types=1);

namespace Tests\Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\FeeItem;
use Centrobill\Sdk\Entity\GeoFee;
use Centrobill\Sdk\Exception\GeoFeeException;
use Centrobill\Sdk\ValueObject\Country;
use Centrobill\Sdk\ValueObject\Fees\Value;
use PHPUnit\Framework\TestCase;

class GeoFeeTest extends TestCase
{
    private GeoFee $entity;

    public function testToArrayWithGeo()
    {
        $this->entity = new GeoFee([
            new FeeItem(new Value(0.1)),
        ], new Country('USA'));

        self::assertEquals(
            [
                'geo' => 'USA',
                'items' => [
                    [
                        'paymentMethod' => 'ALL',
                        'value' => 0.1,
                    ],
                ],
            ],
            $this->entity->toArray()
        );
    }

    public function testToArrayWithDefaultGeo()
    {
        $this->entity = new GeoFee([
            new FeeItem(new Value(0.2)),
        ]);

        self::assertEquals(
            [
                'geo' => 'ALL',
                'items' => [
                    [
                        'paymentMethod' => 'ALL',
                        'value' => 0.2,
                    ],
                ],
            ],
            $this->entity->toArray()
        );
    }

    public function testToArrayThrowsExceptionOnEmptyItems()
    {
        $this->entity = new GeoFee();

        $this->expectException(GeoFeeException::class);
        $this->expectExceptionMessage('GeoFee items cannot be empty.');

        $this->entity->toArray();
    }
}
