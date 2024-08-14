<?php

namespace Centrobill\Sdk\Entity\Payout;

abstract class AbstractPayout
{
    abstract public function toArray(): array;
}
